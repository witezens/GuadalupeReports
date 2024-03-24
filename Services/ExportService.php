<?php

namespace Modules\GuadalupeReports\Services;

use Modules\GuadalupeReports\App\Models\VProduct;
use Spatie\SimpleExcel\SimpleExcelWriter;

class ExportService
{

    public function exportAllProducts()
    {
        $writer = SimpleExcelWriter::streamDownload('products.csv')
            ->addHeader(['pk', 'producto', 'precio', 'codigo_interno', 'codigo_barras']);

        $query = VProduct::orderBy('pk');

        $i = 0;

        foreach ($query->lazy(1000) as $product)
        {
            $writer->addRow($product->toArray());

            if ($i % 1000 === 0) {
                flush(); // Flush the buffer every 1000 rows
            }
            $i++;
        }

        return $writer->toBrowser();

    }

}
