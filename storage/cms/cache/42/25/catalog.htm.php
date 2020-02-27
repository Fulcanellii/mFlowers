<?php 
class Cms5e579f283ffaa016947080_9d49b3b4e096938fc07788fb3457b2dfClass extends Cms\Classes\PageCode
{
public function onInit() {
    $obProductItem = $this->ProductPage->get();
    $obBrandItem = $this->BrandPage->get();
    $obCategoryItem = $this->CategoryPage->get();
    $obMainCategoryItem = $this->MainCategoryPage->get();
    if (!empty($this->param('slug')) && empty($obProductItem) && empty($obBrandItem) && empty($obCategoryItem)) {
        return $this->ProductPage->getErrorResponse();
    }

    $obActiveCategoryItem = !empty($obCategoryItem) ? $obCategoryItem : $obMainCategoryItem;
    $arBreadcrumbs = [];
    if (!empty($obProductItem)) {
        $arBreadcrumbs[] = ['name' => $obProductItem->name, 'url' => $obProductItem->getPageUrl('catalog')];
    }

    if (!empty($obBrandItem)) {
        $arBreadcrumbs[] = ['name' => $obBrandItem->name, 'url' => $obBrandItem->getPageUrl('catalog')];
    }

    if (!empty($obActiveCategoryItem)) {
        $obCurrentCategory = $obActiveCategoryItem;
        while($obCurrentCategory->isNotEmpty()) {
            $arBreadcrumbs[] = ['name' => $obCurrentCategory->name, 'url' => $obCurrentCategory->getPageUrl('catalog', ['slug'])];
            $obCurrentCategory = $obCurrentCategory->parent;
        }
    }

    $arBreadcrumbs[] = ['name' => 'Home', 'url' => \Cms\Classes\Page::url('index')];
    $arBreadcrumbs = array_reverse($arBreadcrumbs);

    $this['obProduct'] = $obProductItem;
    $this['obBrand'] = $obBrandItem;
    $this['obActiveCategory'] = $obActiveCategoryItem;
    $this['arBreadcrumbs'] = $arBreadcrumbs;
}
}
