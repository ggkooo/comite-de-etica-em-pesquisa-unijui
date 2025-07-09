@extends('layouts.app')

@section('title', 'Perguntas Frequentes - Comitê de Ética em Pesquisa - UNIJUÍ')

@section('content')
<div class="container text-justify lh-lg">
    <div class="container mt-5">
        <h2 class="font-primary">Como evitar as principais pendências nos protocolos de pesquisa?</h2>
        <br>
        <p class="fw-bold"><i class="bi bi-check"></i> Uniformizar as informações</p>
        <div class="container">
            <ul>
                <li>É importante padronizar as informações em todos os documentos do protocolo de pesquisa;</li>
            </ul>
            <p>Por exemplo: descrever os benefícios, os riscos ou a maneira de minimizar os riscos de maneira idêntica ou semelhante em todos os documentos nos quais constem estes itens.</p>
        </div>
        <br>
        <p class="fw-bold"><i class="bi bi-check"></i> Pesquisas em ambientes virtuais</p>
        <div class="container">
            <ul>
                <li>para estas pesquisas, é importante ler as duas orientações da Conep: a <a href="#">Carta Circular nº 01/2021</a> e o
                    <a href="#">Ofício Circular nº 23/2022</a>.</li>
            </ul>
            <p>Orientações:</p>
            <ul>
                <li>incluir o link de acesso ao questionário da ferramenta de pesquisa (Google Forms, por exemplo) tanto no documento "projeto detalhado" como nas "informações básicas do projeto" na Plataforma Brasil;</li>
                <li>inserir a versão impressa da ferramenta de pesquisa (Google Forms, por exemplo) no Anexo do "projeto detalhado" (acessar o formulário e salvar em PDF);</li>
                <li>na abertura do questionário, incluir o TCLE (versão para pesquisa em ambientes virtuais) ou o link para o(a) participante acessar o referido documento e salvar ou imprimir.</li>
            </ul>
        </div>
        <br>
        <p class="fw-bold"><i class="bi bi-check"></i> Equipe de pesquisa</p>
        <div class="container">
            <ul>
                <li>Citar nos documentos todos os pesquisadores envolvidos;</li>
            </ul>
        </div>
        <br>
        <p class="fw-bold"><i class="bi bi-check"></i> Orçamento</p>
        <div class="container">
            <ul>
                <li>informar e descrever o orçamento, mesmo que com valores aproximados.</li>
            </ul>
            <p class="fw-bold">Atenção: </p>
            <ul>
                <li>não existe pesquisa com custo "zero", pois mesmo as pesquisas que ocorrem em ambiente virtual, por exemplo, apresentam custos relativos ao acesso à internet;</li>
            </ul>
        </div>
        <br>
        <p class="fw-bold"><i class="bi bi-check"></i> Instituição proponente e coparticipante</p>
        <div class="container">
            <ul>
                <li>evitar o erro na identificação da instituição proponente (de onde parte a pesquisa) e coparticipante (onde será realizada parte ou toda a pesquisa).</li>
            </ul>
            <p>Atenção: </p>
            <ul>
                <li>se a pesquisa parte de um campus da UNIJUÍ e vai acontecer em outro campus da UNIJUÍ, este não é coparticipante, uma vez que faz parte da mesma instituição;</li>
                <li>se a pesquisa parte de um campus da UNIJUÍ e vai acontecer na Fundação Municipal de Saúde de Santa Rosa (FUMSSAR), por exemplo, onde a UNIJUÍ tem campus, trata-se de outra instituição; logo é uma instituição coparticipante.</li>
            </ul>
        </div>
        <br>
        <p class="fw-bold"><i class="bi bi-check"></i> Infraestrutura adequada</p>
        <div class="container">
            <ul>
                <li>informar e descrever se no local onde será realizada a pesquisa tem infraestrutura adequada para a sua realização.</li>
            </ul>
            <p><strong>Por exemplo:</strong> a pesquisa é sobre um tema que exige maior confidencialidade e não se descreve a existência de sala reservada bem como que a pesquisa será realizada na referida sala.</p>
        </div>
        <br>
        <p class="fw-bold"><i class="bi bi-check"></i> Abordagem e obtenção do consentimento</p>
        <div class="container">
            <ul>
                <li>descrever a forma de abordagem e convite aos(às) participantes da pesquisa e como se dará o processo de obtenção do consentimento ou assentimento, em especial no documento "projeto detalhado".</li>
            </ul>
        </div>
        <br>
        <p class="fw-bold"><i class="bi bi-check"></i> Situação de vulnerabilidade </p>
        <div class="container">
            <ul>
                <li>quando for o caso, indicar se os(as) participantes se encontram em situação de vulnerabilidade e, diante desta situação, descrever maneiras adequadas de abordagem e obtenção do consentimento ou assentimento.</li>
            </ul>
            <p><strong>Exemplos de situações de vulnerabilidade: </strong>quando o pesquisador é, também, professor dos(as) participantes (relação professor-aluno); quando as participantes são mulheres vítimas de violência; populações indígenas; pessoas com autonomia reduzida; entre outros casos.</p>
        </div>
        <p>Critérios de exclusão:</p>
        <div class="container">
            <ul>
                <li>não descrever os critérios de exclusão apenas como o inverso dos critérios de inclusão.</li>
            </ul>
            <p><strong>Importante:</strong> critérios de exclusão são critérios que farão com que participantes que poderiam ser incluídos na pesquisa sejam dela excluídos. </p>
            <div class="container">
                <ul>
                    <li>
                        <strong>Exemplo 1:</strong> se o critério de inclusão for ser "homem", o critério de exclusão não poderá ser "mulher", uma vez que, sendo mulher, a pessoa já não poderá ser incluída na pesquisa e, neste caso, não sendo incluída, não poder ser excluída; digamos que em uma pesquisa busca verificar os efeitos de um medicamento para células malignas na próstata, entre homens de idade entre 50 e 70 anos; menores de 50 e maiores de 70 não fazem parte da população de estudo e, portanto, não podem ser critérios de exclusão; entretanto, homens com mais de 50 anos e menos de 70 anos (população do estudo) poderão ser excluídos se tiverem sido submetidos a uma cirurgia de retirada de tumor na próstata, por exemplo, ou já estejam em tratamento da doença. Os critérios de exclusão, portanto, devem se referir à população de estudo e indicar os incluídos que não poderão participar da pesquisa;
                    </li>
                    <li>
                        <strong>Exemplo 2:</strong> para ser excluído do estudo, portanto, já deve ter sido incluído no estudo; não assinar o termo de consentimento também não poderá ser considerado um critério de exclusão porque, neste caso, a pessoa não poderá ser incluída na pesquisa; assim, é necessário assinar o TCLE, isto é, concordar em participar da pesquisa, para depois se enquadrar em um fator ou critério de exclusão.
                    </li>
                </ul>
            </div>
            <p><strong>Observação:</strong> a depender da metodologia prevista no projeto, é possível que pesquisas das áreas das Ciências Humanas e Sociais não prevejam critérios de exclusão. Nesse caso, pode-se indicar "Não se aplica".</p>
        </div>
        <br>
        <p class="fw-bold"><i class="bi bi-check"></i> Questionário ou roteiro de entrevistas</p>
        <div class="container">
            <ul>
                <li>a análise ética se pauta, também, pela análise dos questionários e roteiros de entrevistas, os quais devem ser postados na Plataforma Brasil como arquivos separados.</li>
            </ul>
            <p><strong>Importante:</strong> devem ser justificadas as situações nas quais há a coleta de elementos que permitam identificar os participantes (nome; série; curso; entre outros) e verificar a existência de perguntas que podem causar algum tipo de constrangimento e que poderiam ser suprimidas ou substituídas por outras.</p>
        </div>
        <br>
        <p><span class="fw-bold"><i class="bi bi-check"></i> Pesquisas com grupos controle:</span> é necessário explicitar e garantir que os(as) participantes do grupo controle receberão a mesma intervenção/metodologia realizada com o grupo experimental, caso tal intervenção/metodologia resulte em aspectos favoráveis.</p>
        <br>
        <p><span class="fw-bold"><i class="bi bi-check"></i> Pesquisas realizadas nas escolas (e nos campi da UNIJUÍ):</span> priorizar os horários de contraturno a fim de que os participantes não sejam privados das aulas e demais atividades de ensino.</p>
        <div class="container">
            <ul>
                <li>Caso não seja possível e a pesquisa ocorra nos horários de aula, informar como será o atendimento dos(as) estudantes que não desejarem participar da proposta;</li>
                <li>Caso a pesquisa seja realizada no contraturno, observar o ressarcimento de possíveis despesas dos/as participantes.</li>
            </ul>
            <p><span class="fw-bold">Importante:</span> o participante não pode ter gastos com a pesquisa; as despesas dos participantes com a participação na pesquisa são de responsabilidade do pesquisador e ou do patrocinador.</p>
        </div>
        <br>
        <p><span class="fw-bold"><i class="bi bi-check"></i> TCLE, TALE, RCLE e RALE</span></p>
        <p><span class="fw-bold">Importante:</span> sugere-se consultar os modelos disponibilizado no roteiro de documentos e adaptá-los conforme a necessidade do(s) pesquisador(es);</p>
        <div class="container">
            <ul>
                <li>? Deve ser redigido em linguagem acessível porque é um dos poucos documentos aos quais o(a) participante ou seus(suas) responsáveis têm acesso. Por exemplo: evitar o uso de termos técnicos ou, quando isso não for possível, explicar os termos técnicos utilizados; evitar transcrever o texto diretamente do projeto de pesquisa, pois normalmente os termos técnicos são incompreensíveis pelos participantes.</li>
                <li>? Descrever o que o(a) participante precisará fazer se desejar participar da pesquisa e qual a previsão de duração de cada etapa da sua participação;</li>
                <li>? O TCLE-e o RCLE aplicáveis aos responsáveis pelo(a) participante precisa ser apresentado com linguagem adaptada, direcionada justamente para o(a) responsável e não para o(a) participante.</li>
                <li>? O TCLE, o TALE, o RCLE e o RALE, para serem utilizados em pesquisas em ambiente virtual, devem estar adaptados para tal situação. Por exemplo: se não haverá contato pessoal com os(as) participantes, indicar como será coletada a assinatura do documento ou incluir a adaptação presente no modelo sugerido pelo CEP/UNIJUÍ.</li>
            </ul>
            <p><span class="fw-bold">Observação:</span> a depender da idade dos(as) participantes, pode-se, ainda, utilizar o chamado "TALE lúdico", onde o texto é acompanhado por imagens que podem contribuir para a compreensão. O CEP/UNIJUÍ sugere um modelo de TALE lúdico no seu roteiro de documentos.</p>
        </div>
        <br>
        <p><span class="fw-bold"><i class="bi bi-check"></i> Formas de divulgação dos resultados da pesquisa</span></p>
        <div class="container">
            <ul>
                <li>é necessário que sejam indicadas as formas de divulgação dos resultados da pesquisa aos(às) participantes em linguagem acessível, se estes desejarem receber, bem como as formas de publicização.</li>
            </ul>
            <p><span class="fw-bold">Observação:</span> nem sempre o(a) participante terá acesso aos resultados publicados em artigo, TCC e ou divulgados na apresentação ou defesa do TCC; Ainda que possa ter acesso, a linguagem utilizada apresentada nesses casos pode não se compreendida, sendo necessário informar no projeto como se dará a devolutiva aos participantes interessados.</p>
        </div>
    </div>
</div>
@endsection