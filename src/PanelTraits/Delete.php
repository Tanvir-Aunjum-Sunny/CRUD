<?php

namespace Backpack\CRUD\PanelTraits;

trait Delete
{
    /*
    |--------------------------------------------------------------------------
    |                                   DELETE
    |--------------------------------------------------------------------------
    */

    /**
     * Delete a row from the database.
     *
     * @param  int $id The id of the item to be deleted.
     *
     * @return bool True if the item was deleted.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException if the model was not found.
     *
     * TODO: should this delete items with relations to it too?
     */
    public function delete($id)
    {
        return (string) $this->model->findOrFail($id)->delete();
    }

    /**
     * Add the button needed for the bulk delete functionality.
     */
    public function addBulkDeleteButton()
    {
        $this->addButton('bottom', 'bulk_delete', 'view', 'crud::buttons.bulk_delete');
    }
}
