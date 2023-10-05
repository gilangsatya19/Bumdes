<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LaporanKeuanganItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $nama,
        public string $nominal = '0',
        public bool   $isNegative = false,
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        ddd([
            'nama_akun' => $this->nama_akun,
            'nominal_akun' => $this->nominal_akun,
            'is_negative' => $this->is_negative,
        ]);

        return view('components.pdf.laporan-keuangan-item', [
            'nama_akun' => $this->nama_akun,
            'nominal_akun' => $this->nominal_akun,
            'is_negative' => $this->is_negative,
        ]);
    }
}
