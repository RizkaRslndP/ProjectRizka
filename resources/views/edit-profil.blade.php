<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @include('nav-in')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="max-w-5xl mx-auto px-6 py-10">

  <!-- Header -->
  <div class="mb-8">
    <h1 class="text-2xl font-semibold text-gray-900">Edit Profil</h1>
    <p class="text-gray-500 text-sm mt-1">
      Perbarui data pribadi dan informasi akademik Anda
    </p>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <!-- LEFT: FOTO PROFIL -->
    <div class="bg-white border border-gray-200 rounded-2xl p-6">
      <div class="flex flex-col items-center text-center">
        <img
          src="{{ Vite::asset('resources/assets/profil.png') }}"
          class="h-32 w-32 rounded-full border border-gray-200 object-cover"
          alt="Foto Profil"
        />

        <h3 class="mt-4 font-medium text-gray-900">Foto Profil</h3>
        <p class="text-sm text-gray-500 mt-1">
          JPG / PNG • Max 2MB
        </p>

        <label class="mt-4 inline-block cursor-pointer rounded-lg border border-gray-300 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
          Ganti Foto
          <input type="file" class="hidden">
        </label>
      </div>
    </div>

    <!-- RIGHT: FORM -->
    <div class="lg:col-span-2 bg-white border border-gray-200 rounded-2xl p-6">

      <form class="space-y-6">

        <!-- Nama & NIM -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">
              Nama Lengkap
            </label>
            <input
              type="text"
              class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-indigo-500 focus:ring-indigo-500"
              placeholder="Nama lengkap mahasiswa"
            />
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">
              NIM
            </label>
            <input
              type="text"
              class="mt-1 w-full rounded-lg border border-gray-300 bg-gray-50 px-3 py-2 text-sm"
              placeholder="Nomor Induk Mahasiswa"
              disabled
            />
          </div>
        </div>

        <!-- Prodi & Fakultas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">
              Program Studi
            </label>
            <input
              type="text"
              class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2 text-sm"
              placeholder="Teknik Informatika"
            />
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">
              Fakultas
            </label>
            <input
              type="text"
              class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2 text-sm"
              placeholder="Fakultas Sains & Teknologi"
            />
          </div>
        </div>

        <!-- Email & HP -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">
              Email
            </label>
            <input
              type="email"
              class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2 text-sm"
              placeholder="email@student.ac.id"
            />
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">
              No. HP
            </label>
            <input
              type="text"
              class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2 text-sm"
              placeholder="08xxxxxxxxxx"
            />
          </div>
        </div>

        <!-- Gender & Tanggal Lahir -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700">
              Jenis Kelamin
            </label>
            <select class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2 text-sm">
              <option>Laki-laki</option>
              <option>Perempuan</option>
            </select>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">
              Tanggal Lahir
            </label>
            <input
              type="date"
              class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2 text-sm"
            />
          </div>
        </div>

        <!-- Alamat -->
        <div>
          <label class="block text-sm font-medium text-gray-700">
            Alamat
          </label>
          <textarea
            rows="3"
            class="mt-1 w-full rounded-lg border border-gray-300 px-3 py-2 text-sm"
            placeholder="Alamat lengkap mahasiswa"
          ></textarea>
        </div>

        <!-- Button -->
        <div class="flex justify-end gap-3 pt-4">
          <button
            type="reset"
            class="rounded-lg border border-gray-300 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50"
          >
            Batal
          </button>

          <button
            type="submit"
            class="rounded-lg bg-indigo-600 px-5 py-2 text-sm font-medium text-white hover:bg-indigo-500"
          >
            Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>