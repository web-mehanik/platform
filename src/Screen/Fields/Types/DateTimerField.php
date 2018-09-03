<?php

declare(strict_types=1);

namespace Orchid\Screen\Fields\Types;

use Orchid\Screen\Fields\Field;

/**
 * Class DateTimerField.
 *
 * @method $this accept($value = true)
 * @method $this accesskey($value = true)
 * @method $this autocomplete($value = true)
 * @method $this autofocus($value = true)
 * @method $this checked($value = true)
 * @method $this disabled($value = true)
 * @method $this form($value = true)
 * @method $this formaction($value = true)
 * @method $this formenctype($value = true)
 * @method $this formmethod($value = true)
 * @method $this formnovalidate($value = true)
 * @method $this formtarget($value = true)
 * @method $this list($value = true)
 * @method $this max($value = true)
 * @method $this maxlength($value = true)
 * @method $this min($value = true)
 * @method $this multiple($value = true)
 * @method $this name($value = true)
 * @method $this pattern($value = true)
 * @method $this placeholder($value = true)
 * @method $this readonly($value = true)
 * @method $this required($value = true)
 * @method $this size($value = true)
 * @method $this src($value = true)
 * @method $this step($value = true)
 * @method $this tabindex($value = true)
 * @method $this value($value = true)
 * @method $this help($value = true)
 */
class DateTimerField extends Field
{
    /**
     * @var string
     */
    public $view = 'platform::fields.datetime';

    /**
     * Default attributes value.
     *
     * @var array
     */
    public $attributes = [
        'type'  => 'text',
        'class' => 'form-control',
        'data-controller' => 'components--datetime',
        'data-components--datetime-enable-time' => 'true',
        'data-components--datetime-time_24hr' => 'true',
        'data-components--datetime-allow-input' => 'true',
    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    public $inlineAttributes = [
        'accept',
        'accesskey',
        'autocomplete',
        'autofocus',
        'checked',
        'disabled',
        'form',
        'formaction',
        'formenctype',
        'formmethod',
        'formnovalidate',
        'formtarget',
        'list',
        'max',
        'maxlength',
        'min',
        'multiple',
        'name',
        'pattern',
        'placeholder',
        'readonly',
        'required',
        'size',
        'src',
        'step',
        'tabindex',
        'value',
        'data-controller',
        'data-components--datetime-enable-time',
        'data-components--datetime-time_24hr',
        'data-components--datetime-allow-input',
    ];
}