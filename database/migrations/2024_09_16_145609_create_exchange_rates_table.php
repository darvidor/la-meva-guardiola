<?php

use App\Models\Currency;
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
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Currency::class, "base_currency")->constrained("currencies")->cascadeOnDelete();
            $table->foreignIdFor(Currency::class, "target_curreny")->constrained("currencies")->cascadeOnDelete();
            $table->decimal('exchange_rate', 20, 10);
            $table->date("rate_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exchange_rates');
    }
};
