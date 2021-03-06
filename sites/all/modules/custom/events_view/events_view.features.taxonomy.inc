<?php
/**
 * @file
 * events_view.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function events_view_taxonomy_default_vocabularies() {
  return array(
    'event_tags' => array(
      'name' => 'Event Tags',
      'machine_name' => 'event_tags',
      'description' => 'Tags for Event Pages',
      'hierarchy' => 0,
      'module' => 'taxonomy',
      'weight' => 0,
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
  );
}
