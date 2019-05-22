@extends('layouts.admin')

@section('content')
@if ($valide == true)
<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <i class="fa fa-check mx-2"></i>
            <strong>Bravo</strong> Votre voyage a bien été supprimé ! 
          </div>
          @endif
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Voyages actifs</h6>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">#</th>
                          <th scope="col" class="border-0">Destination</th>
                          <th scope="col" class="border-0">Prix</th>
                          <th scope="col" class="border-0">Titre</th>
                          <th scope="col" class="border-0">Description</th>
                          <th scope="col" class="border-0">Image</th>
                          <th scope="col" class="border-0"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($voyages as $voyage)
                        <tr>
                          <td>{{ $voyage->id}}</td>
                          <td>{{ $voyage->destination}}</td>
                          <td>{{ $voyage->prix}}</td>
                          <td>{{ $voyage->titre}}</td>
                          <td>{{ $voyage->description}}</td>
                          <td>{{ $voyage->image}}</td>
                          <td><a href="{{route('showPost',['id'=> $voyage->id])}}">modifier</a> - <a href="{{route('deletePost',['id'=> $voyage->id])}}">supprimer</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection