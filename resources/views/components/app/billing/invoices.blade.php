<x-common.setting-section title="Invoices">
    <table class="w-full text-left">
        <thead class="dark:bg-slate-900 border border-slate-200/10">
            <tr>
                <th class="py-2 px-2">Invoice Date</th>
                <th class="py-2 px-2">Amount</th>
                <th class="py-2 px-2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr class="hover:bg-slate-500/5 border border-slate-200/10">
                    <td class="p-2">{{ $invoice->date }}</td>
                    <td class="p-2">{{ $invoice->total }}</td>
                    <td class="p-2 text-right">
                        <a
                            href="{{ route('app.settings.billing.invoices.download', $invoice->id) }}"
                            class="text-indigo-600 hover:text-indigo-200"
                            target="_blank"
                        >
                            Download
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-common.setting-section>
