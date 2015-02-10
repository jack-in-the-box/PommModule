PommModule
==========

Pomm module for zf2

Installation
------------

This package can be installed via composer

   https://packagist.org/packages/jitb/pomm-module

Configuration
-------------

Just add it to your application configuration file

return array(
    'pomm' => array(
        'databases' => array(
            'con1' => array (
                'dsn'  => 'pgsql://postgres:postgres@127.0.0.1/myschema',
            ),
        ),
    ),
);

Inspection
----------

### Config

Inspect the configuration : vendor/bin/pomm.php inspect-config

### Database

Inspect a database : vendor/bin/pomm.php inspect-database pstudio2

### Schema

Inspect a schema : vendor/bin/pomm.php inspect-database pstudio2 public

### Relation

Inspect a relation : vendor/bin/pomm.php inspect-relation pstudio2 organization people

Generation
----------

### Model

Generate the "people" model for "organization" schema : vendor/bin/pomm.php generate-model pstudio2 organization people --force

### Structure

Generate the "people" structure for "organization" schema : vendor/bin/pomm.php generate-structure pstudio2 organization people

### Entity

Generate the "people" relation for "organization" schema : vendor/bin/pomm.php generate-entity pstudio2 organization people --force

### Relation

Generate entity, structure and model for one relation : generate-relation-all pstudio2 organization people

### All for a given schema

Generate relation, structure and models for all relations of a schema : generate-schema-all pstudio2 organization

### All for a given database

Generate structure, model and entity file for all relations of all schemas in a database : generate-database-all pstudio2
