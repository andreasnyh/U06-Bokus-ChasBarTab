@extends('layout')
    @section('content')
    <table>
        <tr>
            <th><h3>Namn</h3></th>
            <th><h3>Antal</h3></th>
            <th><h3>Pris</h3></th>
        </tr>
        <tr>
            <td>Öl</td>
            <td>4</td>
            <td>20</td>
        </tr>
    </table>
    <form method="get" action="/">
        <input type="submit" value="Lägg Till"> 
    </form>
    <form method="get" action="/">
    <input type="submit" value="Redigera">
    </form>
    @endsection