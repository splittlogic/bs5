<?php

use Illuminate\Support\Facades\Route;

use splittlogic\bs5\Http\Controllers\bs5Controller;
use splittlogic\bs5\Http\Controllers\bs5AccordionController;
use splittlogic\bs5\Http\Controllers\bs5AlertsController;
use splittlogic\bs5\Http\Controllers\bs5BadgesController;
use splittlogic\bs5\Http\Controllers\bs5BreadcrumbsController;
use splittlogic\bs5\Http\Controllers\bs5ButtonsController;
use splittlogic\bs5\Http\Controllers\bs5ButtongroupController;
use splittlogic\bs5\Http\Controllers\bs5CardsController;
use splittlogic\bs5\Http\Controllers\bs5CarouselController;
use splittlogic\bs5\Http\Controllers\bs5CollapseController;
use splittlogic\bs5\Http\Controllers\bs5DropdownsController;
use splittlogic\bs5\Http\Controllers\bs5ModalController;
use splittlogic\bs5\Http\Controllers\bs5StartController;
use splittlogic\bs5\Http\Controllers\bs5ContentsController;
use splittlogic\bs5\Http\Controllers\bs5FormsController;
use splittlogic\bs5\Http\Controllers\bs5OffcanvasController;
use splittlogic\bs5\Http\Controllers\bs5PopoversController;
use splittlogic\bs5\Http\Controllers\bs5PlaceholdersController;
use splittlogic\bs5\Http\Controllers\bs5ProgressController;
use splittlogic\bs5\Http\Controllers\bs5PaginationController;
use splittlogic\bs5\Http\Controllers\bs5SpinnersController;
use splittlogic\bs5\Http\Controllers\bs5ScrollspyController;
use splittlogic\bs5\Http\Controllers\bs5ToastController;
use splittlogic\bs5\Http\Controllers\bs5TooltipsController;
use splittlogic\bs5\Http\Controllers\bs5ComponentsController;
use splittlogic\bs5\Http\Controllers\bs5HelpersController;
use splittlogic\bs5\Http\Controllers\bs5IconController;
use splittlogic\bs5\Http\Controllers\bs5ListgroupController;
use splittlogic\bs5\Http\Controllers\bs5NavbarController;
use splittlogic\bs5\Http\Controllers\bs5NavsandtabsController;
use splittlogic\bs5\Http\Controllers\bs5TestController;

Route::get(
  'splittlogic/bs5',
  [bs5Controller::class, 'index']
)->name('splittlogic.bs5');

Route::get(
  'splittlogic/bs5/components/accordion',
  [bs5AccordionController::class, 'index']
)->name('splittlogic.bs5.components.accordion');

Route::get(
  'splittlogic/bs5/components/alerts',
  [bs5AlertsController::class, 'index']
)->name('splittlogic.bs5.components.alerts');

Route::get(
  'splittlogic/bs5/components/badges',
  [bs5BadgesController::class, 'index']
)->name('splittlogic.bs5.components.badges');

Route::get(
  'splittlogic/bs5/components/breadcrumbs',
  [bs5BreadcrumbsController::class, 'index']
)->name('splittlogic.bs5.components.breadcrumbs');

Route::get(
  'splittlogic/bs5/components/buttons',
  [bs5ButtonsController::class, 'index']
)->name('splittlogic.bs5.components.buttons');

Route::get(
  'splittlogic/bs5/components/buttongroup',
  [bs5ButtongroupController::class, 'index']
)->name('splittlogic.bs5.components.buttongroup');

Route::get(
  'splittlogic/bs5/components/cards',
  [bs5CardsController::class, 'index']
)->name('splittlogic.bs5.components.cards');

Route::get(
  'splittlogic/bs5/components/carousel',
  [bs5CarouselController::class, 'index']
)->name('splittlogic.bs5.components.carousel');

Route::get(
  'splittlogic/bs5/components/collapse',
  [bs5CollapseController::class, 'index']
)->name('splittlogic.bs5.components.collapse');

Route::get(
  'splittlogic/bs5/components/dropdowns',
  [bs5DropdownsController::class, 'index']
)->name('splittlogic.bs5.components.dropdowns');

Route::get(
  'splittlogic/bs5/components/modal',
  [bs5ModalController::class, 'index']
)->name('splittlogic.bs5.components.modal');

Route::get(
  'splittlogic/bs5/components/navsandtabs',
  [bs5NavsandtabsController::class, 'index']
)->name('splittlogic.bs5.components.navsandtabs');

Route::get(
  'splittlogic/bs5/components/navbar',
  [bs5NavbarController::class, 'index']
)->name('splittlogic.bs5.components.navbar');

Route::get(
  'splittlogic/bs5/components/offcanvas',
  [bs5OffcanvasController::class, 'index']
)->name('splittlogic.bs5.components.offcanvas');

Route::get(
  'splittlogic/bs5/components/pagination',
  [bs5PaginationController::class, 'index']
)->name('splittlogic.bs5.components.pagination');

Route::get(
  'splittlogic/bs5/components/popovers',
  [bs5PopoversController::class, 'index']
)->name('splittlogic.bs5.components.popovers');

Route::get(
  'splittlogic/bs5/components/placeholders',
  [bs5PlaceholdersController::class, 'index']
)->name('splittlogic.bs5.components.placeholders');

Route::get(
  'splittlogic/bs5/components/progress',
  [bs5ProgressController::class, 'index']
)->name('splittlogic.bs5.components.progress');

Route::get(
  'splittlogic/bs5/components/spinners',
  [bs5SpinnersController::class, 'index']
)->name('splittlogic.bs5.components.spinners');

Route::get(
  'splittlogic/bs5/components/scrollspy',
  [bs5ScrollspyController::class, 'index']
)->name('splittlogic.bs5.components.scrollspy');

Route::get(
  'splittlogic/bs5/components/toast',
  [bs5ToastController::class, 'index']
)->name('splittlogic.bs5.components.toast');

Route::get(
  'splittlogic/bs5/components/tooltips',
  [bs5TooltipsController::class, 'index']
)->name('splittlogic.bs5.components.tooltips');

Route::get(
  'splittlogic/bs5/gettingstarted/{page}',
  [bs5StartController::class, 'index']
)->name('splittlogic.bs5.start');

Route::get(
  'splittlogic/bs5/contents/{page}',
  [bs5ContentsController::class, 'index']
)->name('splittlogic.bs5.contents');

Route::get(
  'splittlogic/bs5/forms/{page}',
  [bs5FormsController::class, 'index']
)->name('splittlogic.bs5.forms');

Route::get(
  'splittlogic/bs5/components/listgroup',
  [bs5ListgroupController::class, 'index']
)->name('splittlogic.bs5.components.listgroup');

Route::get(
  'splittlogic/bs5/components/{page}',
  [bs5ComponentsController::class, 'index']
)->name('splittlogic.bs5.components');

Route::get(
  'splittlogic/bs5/helpers/{page}',
  [bs5HelpersController::class, 'index']
)->name('splittlogic.bs5.helpers');

Route::get(
  'splittlogic/bs5/icon/{icon}',
  [bs5IconController::class, 'index']
)->name('splittlogic.bs5.icon');

Route::get(
  'splittlogic/bs5/test',
  [bs5TestController::class, 'index']
)->name('splittlogic.bs5.test');
