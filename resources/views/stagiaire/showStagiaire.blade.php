<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Details stagiare') }}
        </h2>
    </x-slot>


<div class="  mt-20 flex container mx-auto justify-center bg-gray-700  pl-5 pr-5 pb-11  rounded-3xl">

    <div class="flex w-1/3 justify-center items-center ">
        <div class="relative">
            <img src="{{ asset('img/acc.jpg') }}" alt="" srcset="" class="rounded-full w-48 h-48">

        </div>
    </div>

    <div class=" container mx-auto p-4">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-semibold text-gray-800">Profil de stagiaire</h1>
            <div class="mt-4">
                <label class="text-gray-600">Nom :</label>
                <p class="text-gray-800 font-semibold">{{ $stagiaire->nom }}</p>
            </div>
            <div class="mt-4">
                <label class="text-gray-600">Prenom :</label>
                <p class="text-gray-800 font-semibold">{{ $stagiaire->prenoms }}</p>
            </div>
            <div class="mt-2">
                <label class="text-gray-600">Adresse e-mail :</label>
                <p class="text-blue-500 font-semibold">{{ $stagiaire->email }}</p>
            </div>

            <div class="mt-2">
                <label class="text-gray-600">Adresse:</label>
                <p class="text-gray-800 font-semibold">{{$stagiaire->adresse }}</p>
            </div>

        </div>
    </div>
</div>
<div class=" container mx-auto p-4 justify-center bg-gray-700   rounded-3xl mt-2">
    <table class="min-w-full">
        <thead>
          <tr>
            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                Nom du cour
               </th>
            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
             Description
            </th>
            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
            fichier
            </th>
            <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
            url
             </th>

            <!-- Ajoutez plus d'en-têtes de colonnes si nécessaire -->
          </tr>
        </thead>

        <tbody>
          @if ($tacheStagiaires->count() == 0)

          <td class="px-6 py-4 text-center text-3xl font-bold text-whith uppercase tracking-wider border-gray-300">
            Aucun filetache disponible pour le moment
          </td>

      @endif
          @foreach ($tacheStagiaires as $c)


          <tr>
            <td class="px-6 py-4 text-white whitespace-nowrap border-b border-b border-gray-300">
                {{ $c->nomCours}}
                </td>
                <td class="px-6 py-4 text-white whitespace-pre-line border-b border-b border-gray-300">
                    {{ $c->tacheDescription}}
            </td>
            <td class="px-6 py-4 text-white whitespace-pre-line border-b border-b border-gray-300">
                <a href="{{ $c->name }}" target="_blank">
            {{ $c->name }}

        </a>
            </td>
            <td class="px-6 py-4 text-white whitespace-pre-line border-b border-gray-300">

                    <a href="{{ $c->tacheURL }}" target="_blank" rel="noopener noreferrer">{{Str::limit(htmlspecialchars_decode(strip_tags( $c->tacheURL)),30) }}</a>
            </td>


            <!-- Ajoutez plus de cellules pour chaque ligne de données -->
          </tr>
          @endforeach

          <!-- Ajoutez plus de lignes de données si nécessaire -->
        </tbody>
      </table>
</div>
</x-app-layout>
{{-- table --}}

