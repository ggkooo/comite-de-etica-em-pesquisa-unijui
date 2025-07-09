@extends('layouts.app')

@section('title', 'Calendário de Reuniões - Comitê de Ética em Pesquisa - UNIJUÍ')

@section('content')
<div class="container">
    <h2 class="font-primary text-center my-5">Calendário de Reuniões CEP 2025:</h2>
    <table class="table table-striped-columns w-75 mx-auto">
        <thead>
            <tr>
                <th scope="col" class="text-center">Prazo para inserir projetos na Plataforma Brasil*</th>
                <th scope="col" class="text-center">Data da reunião: (Analise dos projetos pelo CEP)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">Recesso do CEP</td>
                <td class="text-center">Janeiro/2025</td>
            </tr>
            <tr>
                <td class="text-center">Até 20 de janeiro</td>
                <td class="text-center">28 de fevereiro</td>
            </tr>
            <tr>
                <td class="text-center">Até 14 de fevereiro</td>
                <td class="text-center">14 de março</td>
            </tr>
            <tr>
                <td class="text-center">Até 07 de março</td>
                <td class="text-center">11 de abril</td>
            </tr>
            <tr>
                <td class="text-center">Até 08 de abril</td>
                <td class="text-center">09 de maio</td>
            </tr>
            <tr>
                <td class="text-center">Até 05 de maio</td>
                <td class="text-center">06 de junho</td>
            </tr>
            <tr>
                <td class="text-center">Até 03 de junho</td>
                <td class="text-center">04 de julho</td>
            </tr>
            <tr>
                <td class="text-center">Até 08 de julho</td>
                <td class="text-center">08 de agosto</td>
            </tr>
            <tr>
                <td class="text-center">Até 02 de setembro</td>
                <td class="text-center">03 de outubro</td>
            </tr>
            <tr>
                <td class="text-center">Até 07 de outubro</td>
                <td class="text-center">07 de novembro</td>
            </tr>
            <tr>
                <td class="text-center">Até 05 de novembro</td>
                <td class="text-center">05 de dezembro</td>
            </tr>
        </tbody>
    </table>
    <div class="container mt-3">
        <p class="text-center"><strong class="text-danger">*</strong> Reuniões extraordinárias ? Se houver necessidade de mais uma reunião no mês, os membros do CEP serão consultados para definir a data.</p>
    </div>
    <div class="container my-5">
        <p class="text-center fs-4 font-primary">O CEP/UNIJUÍ tem o seguinte horário de funcionamento e de atendimento ao público:</p>
        <table class="table table-striped-columns w-75 mx-auto">
            <thead>
            <tr>
                <th scope="col" class="text-center">Dia da semana</th>
                <th scope="col" class="text-center">Horário de funcionamento</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center">Segunda-feira</td>
                <td class="text-center">7h45min às 11h30min e das 13h30min às 17h15min</td>
            </tr>
            <tr>
                <td class="text-center">Terça-feira</td>
                <td class="text-center">7h45min às 11h30min e das 13h30min às 17h15min</td>
            </tr>
            <tr>
                <td class="text-center">Quarta-feira</td>
                <td class="text-center">7h45min às 11h30min e das 13h30min às 17h15min</td>
            </tr>
            <tr>
                <td class="text-center">Quinta-feira</td>
                <td class="text-center">7h45min às 11h30min; e das 13h30min às 17h15min</td>
            </tr>
            <tr>
                <td class="text-center">Sexta-feira</td>
                <td class="text-center">7h45min às 11h30min</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection