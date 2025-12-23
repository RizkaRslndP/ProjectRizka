@extends('components.layout') {{-- atau layouts.app, sesuaikan punyamu --}}

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-6">Repository Dokumen</h1>

        <div class="relative overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs uppercase bg-gray-50">
                    <tr>
                        <th class="px-6 py-3">Judul</th>
                        <th class="px-6 py-3">Penulis</th>
                        <th class="px-6 py-3">Tahun</th>
                        <th class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($documents as $doc)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 font-medium text-gray-900">
                                {{ $doc->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $doc->user->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $doc->year }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('repository.show', $doc->id) }}" class="text-blue-600 hover:underline">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                                Belum ada dokumen
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
