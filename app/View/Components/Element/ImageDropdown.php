<?php

namespace App\View\Components\Element;

use App\Models\Image;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class ImageDropdown extends Component
{
    public string $title;
    public string $fieldName;
    public Collection $images;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct(string $title, string $fieldName)
    {
        $this->title = $title;
        $this->fieldName = $fieldName;
        $this->images = Image::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.element.image-dropdown');
    }
}
