<?php

use App\Models\Menu;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id('orderitem_id');
            $table->foreignIdFor(Menu::class)->nullabble();
            $table->integer('quantity');
            $table->float('unit_price');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderitems');
    }
};
