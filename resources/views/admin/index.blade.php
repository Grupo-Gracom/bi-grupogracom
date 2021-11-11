@include('layouts.admin.head')
@section('titulo','ADG')

<main>
    <div id="dashboard" class="box">

        {{-- @foreach ($users as $user) --}}
            @if ($users == 1)
             <h3>ADG</h3>
                <div class="download">
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Acadêmico</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Atendimento_Cliente.twbx">Cobrança</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Comercial.twbx">Comercial</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Dept_Pessoal.twbx">Departamento Pessoal</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Financeiro.twbx">Financeiro</a>
                {{-- <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Operação</a> --}}
                <a href="http://gracomonline.com.br/bi-down/Tia_Mate.twbx">Tiamate</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Franquia.twbx">Franquia</a>
            </div>
            @endif
              @if ($users == 2)
                <h3>ACADÊMICO</h3>
                <div class="download">
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Acadêmico</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Atendimento_Cliente.twbx">Cobrança</a>
            </div>
            @endif
              @if ($users == 3)
               <h3>COBRANÇA</h3>
                <div class="download">
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Acadêmico</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Atendimento_Cliente.twbx">Cobrança</a>
            </div>
            @endif
              @if ($users == 4)
                <h3>COMERCIAL</h3>
                <div class="download">
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Acadêmico</a>
                {{-- <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Cobrança</a> --}}
                <a href="http://gracomonline.com.br/bi-down/Gracom_Comercial.twbx">Comercial</a>
            </div>
            @endif
              @if ($users == 5)
               <h3>DEPARTAMENTO PESSOAL</h3>
                <div class="download">
                {{-- <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Acadêmico</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Cobrança</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Comercial</a> --}}
                <a href="http://gracomonline.com.br/bi-down/Gracom_Dept_Pessoal.twbx">Departamento Pessoal</a>
                {{-- <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Financeiro</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Operação</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Tiamate</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Franquia</a> --}}
            </div>
            @endif
              @if ($users == 6)
               <h3>FINANCEIRO</h3>
                <div class="download">
                {{-- <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Acadêmico</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Cobrança</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Comercial</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Departamento Pessoal</a> --}}
                <a href="http://gracomonline.com.br/bi-down/Gracom_Financeiro.twbx">Financeiro</a>
                {{-- <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Operação</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Tiamate</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Franquia</a> --}}
            </div>
            @endif
              @if ($users == 7)
               <h3>OPERAÇÃO</h3>
                <div class="download">
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Acadêmico</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Atendimento_Cliente.twbx">Cobrança</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Comercial.twbx">Comercial</a>
                {{-- <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Departamento Pessoal</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Financeiro</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Operação</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Tiamate</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Franquia</a> --}}
            </div>
            @endif
              @if ($users == 8)
               <h3>TIAMATE</h3>
                <div class="download">
                {{-- <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Acadêmico</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Cobrança</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Comercial</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Departamento Pessoal</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Financeiro</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Operação</a> --}}
                <a href="http://gracomonline.com.br/bi-down/Tia_Mate.twbx">Tiamate</a>
                {{-- <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Franquia</a> --}}
            </div>
            @endif
              @if ($users == 9)
               <h3>FRANQUIA</h3>
                <div class="download">
                {{-- <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Acadêmico</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Cobrança</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Comercial</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Departamento Pessoal</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Financeiro</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Operação</a>
                <a href="http://gracomonline.com.br/bi-down/Gracom_Academico.twbx">Tiamate</a> --}}
                <a href="http://gracomonline.com.br/bi-down/Gracom_Franquia.twbx">Franquia</a>
            </div>
            @endif
      {{-- @endforeach --}}
    </div>
</main>