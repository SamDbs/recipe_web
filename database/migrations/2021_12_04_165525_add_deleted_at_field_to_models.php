<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtFieldToModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingredients', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('ingredients_recipes', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('recipes', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('recipe_steps', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('recipe_types', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('steps', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('types', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingredients', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('ingredients_recipes', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('recipe_steps', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('recipe_types', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('steps', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('types', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
