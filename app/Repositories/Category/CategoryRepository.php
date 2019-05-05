<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:42
 */

namespace App\Repositories\Category;

use stdClass;
use App\Models\Category;
use Illuminate\Support\Collection;
use App\Interfaces\Category\CategoryInterface;

class CategoryRepository implements CategoryInterface
{
    /**
     * Register new category
     * @param stdClass $params
     * @return Category
     */
    public function register(stdClass $params) : Category
    {
        $entity = new Category([
            'tx_name_category' => $params->tx_name_category,
        ]);
        $entity->save();
        $entity->refresh();
        return $entity;
    }

    /**
     * Edit user
     * @param int $id
     * @param stdClass $params
     * @return Category
     */
    public function edit(int $id, stdCLass $params) : Category
    {
        $entity = $this->retrieveById($id);
        $entity->fill([
            'tx_name_category' => $params->tx_name_category,
        ]);
        $entity->save();
        $entity->refresh();
        return $entity;
    }

    /**
     * Delete category
     */
    public function delete($id)
    {
        $entity = $this->retrieveById($id);
        return $entity->delete();
    }

    /**
     * List category
     * @param stdClass $params
     * @return Collection
     */
    public function list($params=null) : Collection
    {
        $query = Category::query();

        if (isset($params->tx_name_category)) {
            $text = $params->tx_name_category;
            $query->where( function ($q2) use ( $text ) {
                $q2->where( 'tx_name_category', 'ilike', "%$text%" );
            });
        }
        $query->orderBy('tx_name_category');
        return $query->get();
    }

    /**
     * Retrieve category
     * @param int $id
     * @return Category
     */
    public function retrieveById(int $id) : ?Category
    {
        return Category::find($id);
    }
}
