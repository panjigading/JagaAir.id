<section class="bg-white shadow rounded-xl border border-gray-100 mb-10">
    <div class="p-4 border-b border-gray-100 flex justify-between items-center">
        <h2 class="font-semibold text-lg text-primary">{{ $title }}</h2>
        <a href="#" class="text-primary text-sm hover:underline">Lihat Semua</a>
    </div>
    <table class="w-full text-left text-sm">
        <thead class="bg-gray-50 border-b text-gray-600">
            <tr>
                @foreach ($headers as $head)
                    <th class="py-3 px-4">{{ $head }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr class="border-b hover:bg-gray-50">
                    @foreach ($row as $key => $cell)
                        <td class="py-3 px-4">
                            @if ($key === 'status')
                                @php
                                    $color = match(strtolower($cell)) {
                                        'selesai' => 'bg-green-100 text-green-700',
                                        'terverifikasi' => 'bg-blue-100 text-blue-700',
                                        'ditolak' => 'bg-red-100 text-red-700',
                                        'diproses' => 'bg-yellow-100 text-yellow-700',
                                        default => 'bg-gray-100 text-gray-600',
                                    };
                                @endphp
                                <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $color }}">{{ $cell }}</span>
                            @else
                                {{ $cell }}
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
