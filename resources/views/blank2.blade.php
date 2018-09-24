@extends('layouts.main')
@section('header')
Tabel
@endsection

@section('content')
<div class="col s12">
                  <table class="highlight">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                      </tr>
                      <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                      </tr>
                      <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                      </tr>
                      <tr>
                        <td>Shannon</td>
                        <td>KitKat</td>
                        <td>$9.99</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
@endsection 