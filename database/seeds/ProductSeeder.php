<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Product::create(['name' => 'Martillo','sku' => 'DEPOR-XYZ-BLN-41', 'description' => 'De los mejores']);
        Product::create(['name' => 'Cilcel','sku' => 'DEPOR-XYZ-BLN-42', 'description' => 'De los mejores']);
        Product::create(['name' => 'Barra','sku' => 'DEPOR-XYZ-BLN-43', 'description' => 'De los mejores']);
        Product::create(['name' => 'Cemento','sku' => 'DEPOR-XYZ-BLN-44', 'description' => 'De los mejores']);
        Product::create(['name' => 'Arena','sku' => 'DEPOR-XYZ-BLN-45', 'description' => 'De los mejores']);
        Product::create(['name' => 'Tornillos','sku' => 'DEPOR-XYZ-BLN-46', 'description' => 'De los mejores']);
        Product::create(['name' => 'Pala','sku' => 'DEPOR-XYZ-BLN-47', 'description' => 'De los mejores']);
        Product::create(['name' => 'Pico','sku' => 'DEPOR-XYZ-BLN-48', 'description' => 'De los mejores']);
        Product::create(['name' => 'Grapadora','sku' => 'DEPOR-XYZ-BLN-49', 'description' => 'De los mejores']);
        Product::create(['name' => 'Caladora','sku' => 'DEPOR-XYZ-BLN-51', 'description' => 'De los mejores']);
        Product::create(['name' => 'Taladro','sku' => 'DEPOR-XYZ-BLN-61', 'description' => 'De los mejores']);
        Product::create(['name' => 'Llave','sku' => 'DEPOR-XYZ-BLN-71', 'description' => 'De los mejores']);
        Product::create(['name' => 'Torno','sku' => 'DEPOR-XYZ-BLN-81', 'description' => 'De los mejores']);
        Product::create(['name' => 'Alemana','sku' => 'DEPOR-XYZ-BLN-91', 'description' => 'De los mejores']);
        Product::create(['name' => 'Nivel','sku' => 'DEPOR-XYZ-BLN-141', 'description' => 'De los mejores']);
        Product::create(['name' => 'Destornillador','sku' => 'DEPOR-XYZ-BLN-241', 'description' => 'De los mejores']);
        Product::create(['name' => 'Panaleta','sku' => 'DEPOR-XYZ-BLN-341', 'description' => 'De los mejores']);
        Product::create(['name' => 'Metro','sku' => 'DEPOR-XYZ-BLN-441', 'description' => 'De los mejores']);
        Product::create(['name' => 'Mangera','sku' => 'DEPOR-XYZ-BLN-541', 'description' => 'De los mejores']);
        Product::create(['name' => 'Almadana','sku' => 'DEPOR-XYZ-BLN-641', 'description' => 'De los mejores']);
        Product::create(['name' => 'Conector','sku' => 'DEPOR-XYZ-BLN-741', 'description' => 'De los mejores']);
    }
}
