<?php

namespace App\Livewire\Admin\FoodManagement;

use App\Models\Category;
use Livewire\Component;

class FoodCategoryManagement extends Component
{
    public $category_name;
    public $status;
    public $categories;


    public function saveCategory()
    {
        $this->validate([
            'category_name' => 'required',
        ]);

        $category = new Category();
        $category->name = $this->category_name;
        $category->active = $this->status ? 0 : 1;
        $category->position = Category::count() + 1;
        $category->save();
        $this->reset();
        $this->getCategories();
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        $this->getCategories();
    }

    public function mount()
    {
        $this->getCategories();
    }

    public function getCategories()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.admin.food-management.food-category-management')->layout('livewire.layout.admin');
    }
}
