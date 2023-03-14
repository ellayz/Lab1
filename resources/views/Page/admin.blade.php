@extends('templates.adminheader')

@section('body')
<section class="mt10">
    <div class="overflow--auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500">
            <thead class="text-xs text-gra-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Modelname
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Description
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Directory

                    </th>
                    <th scope="col" class="py-3 px-6">
                        
                    </th>
                    <th scope="col" class="py-3 px-6">
                        
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data2 as $data1)
                    <tr class="bg-gray-800 border-b">
                        <td class="py-3 px-6">
                            {{$data1 -> Modelname}}
                        </td>
                        <td class="py-3 px-6">
                            {{$data1 -> Description}}
                        </td>
                        <td class="py-3 px-6">
                            {{$data1 -> Directory}}
                        </td>
                        <td class="py-3 px-6">
                            <a href="/updated/{{$data1->id}}" class="bg-blue-600 text-black px-4 py-1">update</a>
                        </td>
                        <td class="py-3 px-6">
                            <form method="POST" class="" action="/delete/{{$data1->id}}">
                                @csrf
                                @method('delete')
                                <button type="submit">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection