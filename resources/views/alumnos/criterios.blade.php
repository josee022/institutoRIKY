<x-app-layout>
    <div class="relative overflow-x-auto w-3/4 mx-auto shadow-md sm:rounded-lg">
        <div class="mt-4 mb-4">
            Nombre: {{ $alumno->nombre }}
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        CE
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nota
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumno->notas_por_criterios() as $nota)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $nota->ccee->ce }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $nota->nota }}
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
