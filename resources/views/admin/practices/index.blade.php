@extends('layouts.admin')

@section('content')

    {{-- <h2>ELENCO PRATICHE</h2>
    <ul>
        @foreach ($practices as $practice)
            <li>{{$practice->plate}}</li>            
        @endforeach
    </ul> --}}

    <div id="table-list structure-table" class="index-structure">
        <div class="table-container">
        @if (session()->has('message'))
        <div class="alert alert-success mb-3 mt-3 w-75 m-auto text-capitalize">
            {{ session()->get('message') }}
        </div>
        @endif
        <div>
            <h2>ELENCO PRATICHE</h2>
            <a href="{{route('admin.practices.create')}}" class="add text-white create-button"><button class="btn btn-primary mb-2"><i class="fa-solid fa-plus"></i></button></a>
            <table class="margin-6 mb-2 table-structure">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Targa</th>
                        <th scope="col">Modifica</th>
                        <th scope="col">Elimina</th>
                        {{-- <th scope="col">Categotria</th> --}}
                        <th scope="col">Modello</th>
                        <th scope="col">Colore</th>
                        <th scope="col">Immatricolazione</th>
                        {{-- <th scope="col">Carrozzeria</th>
                        <th scope="col">Tecnico</th>
                        <th scope="col">Status</th>
                        <th scope="col">Assicurazione</th> --}}
                        <th scope="col">Proprietario</th>
                        <th scope="col">Codice Fiscale</th>
                        <th scope="col">Nato a</th>
                        <th scope="col">Nato il</th>
                        <th scope="col">Residenza</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($practices as $practice)
                        <tr>
                            <th scope="row">{{ $practice->id }}</th>
                            <td><a href="{{ route('admin.practices.show', $practice->plate) }}">{{ $practice->plate }}</a></td>
                            <td class="text-center"><a href="{{route('admin.practices.edit', $practice->slug)}}"><i class="fa-solid fa-pen"></i></a></td>
                            <td>
                                <form action="{{route('admin.practices.destroy', $practice->slug)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button text-white btn btn-danger ms-3" data-item-title="{{$practice->plate}}"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                            {{-- <td>
                                @if ($practice->category_id)
                                    @foreach ($categories as $category)
                                        @if( $category->id == $practice->category_id)   
                                            <p>{{$category->name}}</p>
                                        @endif
                                    @endforeach
                                @else
                                    <p>{{'Senza categoria'}}</p>
                                @endif
                            </td> --}}
                            <td>{{$practice->model}}</td>
                            <td>{{$practice->color}}</td>
                            <td>{{$practice->immatricolation}}</td>
                            {{-- <td>                                
                                @if ($practice->garage_id)
                                @foreach ($garages as $garage)
                                    @if( $garage->id == $practice->garage_id)   
                                        <p>{{$garage->name}}</p>
                                    @endif
                                @endforeach
                            @else
                                <p>{{'Senza carrozzeria'}}</p>
                            @endif</td>

                            <td>                                
                                @if ($practice->technician_id)
                                @foreach ($technicians as $technician)
                                    @if( $technician->id == $practice->technician_id)   
                                        <p>{{$technician->name}}</p>
                                    @endif
                                @endforeach
                            @else
                                <p>{{'Senza tecnico'}}</p>
                            @endif</td>

                            <td>                                
                                @if ($practice->status_practice_id)
                                @foreach ($statuspractices as $statuspractice)
                                    @if( $statuspractices->id == $practice->status_practice_id)   
                                        <p>{{$statuspractice->status}}</p>
                                    @endif
                                @endforeach
                            @else
                                <p>{{'Senza status'}}</p>
                            @endif</td>

                            <td>                                
                                @if ($practice->status_practice_id)
                                @foreach ($statuspractices as $statuspractice)
                                    @if( $statuspractices->id == $practice->status_practice_id)   
                                        <p>{{$statuspractice->status}}</p>
                                    @endif
                                @endforeach
                            @else
                                <p>{{'Senza status'}}</p>
                            @endif</td> --}}
                            <td>{{$practice->owner}}</td>
                            <td>{{$practice->tax_id_code}}</td>
                            <td>{{$practice->birthplace}}</td>
                            <td>{{$practice->birth}}</td>
                            <td>{{$practice->residence}}</td>
                            <td>{{$practice->phone_number}}</td>
                            <td>{{$practice->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            

            {{-- {{ $orders->links('vendor.pagination.bootstrap-5') }} --}}
            @include('partials.admin.modal') 
        </div>
    </div>
@endsection