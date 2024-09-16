<?php

use App\Models\Currency;
use App\Models\Entity;
use App\Models\MoneyHolderType;
use App\Models\Transaction;
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
        Schema::create('money_holders', function (Blueprint $table) {
            $table->id();
            $table->string("aka")->unique();
            $table->foreignIdFor(MoneyHolderType::class)->constrained()->restrictOnDelete()->restrictOnUpdate();
            $table->string("account")->unique();
            $table->foreignIdFor(Entity::class);
            $table->foreignIdFor(Currency::class)->constrained()->restrictOnDelete();
            $table->decimal("amount",20,10);
            $table->decimal("amount_lc",20,10);
            $table->foreignIdFor(Currency::class,"currency_lc")->constrained("currencies")->restrictOnDelete();
            $table->foreignIdFor(Transaction::class)->constrained()->restrictOnDelete();
            $table->date("last_transaction");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money_holders');
    }
};
