<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:42
 */

namespace App\Repositories\Category;


use App\Interfaces\GenericInterface;
use App\Models\Category;
use stdClass;

class CategoryRepository implements GenericInterface
{
    /**
     * Register new category
     * @param stdClass $params
     * @return Category
     */
    public function register($params)
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
    public function edit($id, $params)
    {
        $entity = $this->retrieve($id);
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
        $entity = $this->retrieve($id);
        return $entity->delete();
    }

    /**
     * List category
     * @param \stdClass $params
     * @return array
     */
    public function list($params=null)
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
    public function retrieve($id)
    {
        return Category::find($id);
    }
}