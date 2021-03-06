<?php

namespace Collections\Controller;

class RestApi extends \LimeExtra\Controller {
    public function getBySlug($collection=null) {
        return $this->get($collection, true);
    }

    public function get($collection=null, $bySlug=false) {

        if (!$collection) {
            return false;
        }

        $findBy = $bySlug ? 'slug':'name';

        $collection = $this->app->db->findOne("common/collections",  [$findBy=>$collection]);
        if (!$collection) {
            return false;
        }

        $entries = [];

        if ($collection) {
            $col     = "collection".$collection["_id"];
            $options = [];

            if ($filter = $this->param("filter", null)) $options["filter"] = $filter;
            if ($limit  = $this->param("limit", null))  $options["limit"] = $limit;
            if ($sort   = $this->param("sort", null))   $options["sort"] = $sort;
            if ($skip   = $this->param("skip", null))   $options["skip"] = $skip;
            
            if (count($options)) {
                $options = json_decode(json_encode($options, JSON_NUMERIC_CHECK), true);
            }

            $entries = $this->app->db->find("collections/{$col}", $options);
        }

        return json_encode($entries->toArray());
    }

}
