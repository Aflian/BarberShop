<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Staff;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Hairstyle;
use App\Models\InventoryItem;
use App\Models\PaymentMethod;
use App\Models\FinancialTransaction;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $totalBooking = Booking::count();
        $totalStaf = Staff::count();
        $totalGudang = InventoryItem::count();
        $totalService = Service::count();
        $totalGudang = InventoryItem::count();
        $totalStyle = Hairstyle::count();
        $totalUser = User::count();
        $totalPaymentMethods = PaymentMethod::count();
        // Hitung total pemasukan dan pengeluaran
        $totalIncome = FinancialTransaction::where('type', 'income')->sum('amount');
        $totalExpense = FinancialTransaction::where('type', 'expense')->sum('amount');
        function formatRupiah($value) {
            return 'Rp ' . number_format($value, 0, ',', '.');
        }

        return [
            Stat::make('Total Pemasukan', formatRupiah($totalIncome))
                ->description('Total uang masuk')
                ->descriptionIcon('heroicon-o-arrow-trending-up')
                ->color('success'),
        Stat::make('Total Pengeluaran', formatRupiah($totalExpense))
            ->description('Total uang keluar')
            ->descriptionIcon('heroicon-o-arrow-trending-down')
            ->color('danger'),

        Stat::make('Total Pelanggan', number_format($totalUser))
            ->description('Jumlah pelanggan yang terdaftar')
            ->descriptionIcon('heroicon-o-user-group')
            ->color('primary'),

        Stat::make('Total Booking', number_format($totalBooking))
            ->description('Jumlah booking yang tercatat')
            ->descriptionIcon('heroicon-o-calendar-days')
            ->color('info'),

        Stat::make('Total Karyawan', number_format($totalStaf))
            ->description('Jumlah karyawan aktif')
            ->descriptionIcon('heroicon-o-briefcase')
            ->color('warning'),

        Stat::make('Total Inventaris', number_format($totalGudang))
            ->description('Inventaris yang tersedia')
            ->descriptionIcon('heroicon-o-cube')
            ->color('secondary'),

        Stat::make('Layanan Tersedia', number_format($totalService))
            ->description('Jenis layanan aktif')
            ->descriptionIcon('heroicon-o-scissors')
            ->color('info'),

        Stat::make('Total Style', number_format($totalStyle))
            ->description('Hair style tersedia')
            ->descriptionIcon('heroicon-o-sparkles')
            ->color('info'),

        Stat::make('Metode Pembayaran', number_format($totalPaymentMethods))
            ->description('Metode pembayaran yang bisa digunakan')
            ->descriptionIcon('heroicon-o-credit-card')
            ->color('success'),
        ];
    }
}
