<?php
/**
 * This file is part of riesenia/kendo package.
 *
 * Licensed under the MIT License
 * (c) RIESENIA.com
 */

declare(strict_types=1);

namespace Riesenia\Kendo\Widget;

use Riesenia\Kendo\JavascriptFunction;
use Riesenia\Kendo\Widget\Base;

/**
 * A class for creating a kendo window.
 * 
 * @method $this setActions(array<string>|null $actions) Set the actions that will be available for the window. Predefined values are "Close", "Refresh", "Minimize", "Maximize" and "Pin".
 * @method array|null getActions() Get the actions that will be available for the window.
 * @method $this setAnimation(bool|array|null $animation) Set the animation(s) of the window.
 * @method bool|array|null getAnimation() Get the animation(s) of the window.
 * @method $this setAppendTo(string|null $appendTo) Set the element that the window will be appended to.
 * @method string|null getAppendTo() Get the element that the window will be appended to.
 * @method $this setAutoFocus(bool|null $autoFocus) Set whether the window should be focused when opened.
 * @method bool|null getAutoFocus() Get whether the window should be focused when opened.
 * @method $this setContent(string|array|null $content) Set the url or request which the window will use to get it's contents.
 * @method string|array|null getContent() Get the url or request which the window will use to get it's contents.
 * @method $this setDraggable(bool|null $draggable) Set whether the window should be draggable.
 * @method bool|null getDraggable() Get whether the window should be draggable.
 * @method $this iframe(bool|null $iframe) Set whether the window should be an iframe.
 * @method bool|null getIframe() Get whether the window should be an iframe.
 * @method $this setHeight(int|string|null $height) Set the height of the window.
 * @method int|string|null getHeight() Get the height of the window.
 * @method $this setMaxHeight(int|string|null $maxHeight) Set the maximum height of the window.
 * @method int|string|null getMaxHeight() Get the maximum height of the window.
 * @method $this setMaxWidth(int|string|null $maxWidth) Set the maximum width of the window.
 * @method int|string|null getMaxWidth() Get the maximum width of the window.
 * @method $this setMinHeight(int|string|null $minHeight) Set the minimum height of the window.
 * @method int|string|null getMinHeight() Get the minimum height of the window.
 * @method $this setMinWidth(int|string|null $minWidth) Set the minimum width of the window.
 * @method int|string|null getMinWidth() Get the minimum width of the window.
 * @method $this setModal(bool|array{preventScroll:bool}|null $modal) Set whether the window should show a modal overlay over the page.
 * @method bool|array{preventScroll:bool}|null getModal() Get whether the window should show a modal overlay over the page.
 * @method $this setPinned(bool|null $pinned) Set whether the window should be pinned.
 * @method bool|null getPinned() Get whether the window should be pinned.
 * @method $this setPosition(array{top:int|string, left:int|string}|null $position) Set the initial position of the window.
 * @method array{top:int|string, left:int|string}|null getPosition() Get the initial position of the window.
 * @method $this setResizable(bool|null $resizable) Set whether the window should be resizable.
 * @method bool|null getResizable() Get whether the window should be resizable.
 * @method $this setScrollable(bool|null $scrollable) Set whether the window should be scrollable.
 * @method bool|null getScrollable() Get whether the window should be scrollable.
 * 
 */
class Window extends Base {}