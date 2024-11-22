@extends('template.template')
@section('title', 'Cadastro de empresa')
@section('Conteudo')

<div PAI>
    <div class="ctn-titulo">Cadastro de empresa</div>
    <div TEXTO>
        <div COLUNA 1>
            <!-- style="width: 550px; left: 350px; top: 338px; position: absolute; color: rgba(0, 0, 0, 0.60); font-size: 16px; font-family: Inter; font-weight: 400; word-wrap: break-word" -->
        <div>Insira o nome da empresa</div>
        <!-- style="width: 550px; height: 47px; left: 992px; top: 329px; position: absolute; color: rgba(0, 0, 0, 0.60); font-size: 16px; font-family: Inter; font-weight: 400; word-wrap: break-word" -->
        <div>Insira a descrição da empresa</div>
        <div style="width: 550px; height: 47px; left: 349px; top: 478px; position: absolute; color: rgba(0, 0, 0, 0.60); font-size: 16px; 
        font-family: Inter; font-weight: 400; word-wrap: break-word">Insira o CNPJ da empresa</div>
        </div>
        <div COLUNA 2> </div>
    </div>
    <div BOTOES> </div>
</div>

    <div style="width: 586px; height: 47px; left: 990px; top: 306px; position: absolute; color: black; font-size: 24px; font-family: Inter; font-weight: 500; word-wrap: break-word">Descrição</div>
    <div style="width: 580px; height: 50px; left: 350px; top: 365px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px black solid"></div>
    <div style="width: 580px; height: 50px; left: 350px; top: 515px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px black solid"></div>
    <div style="width: 580px; height: 200px; left: 990px; top: 365px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; border: 1px black solid"></div>
    <div style="width: 550px; height: 47px; left: 348px; top: 301px; position: absolute">
        <div style="width: 550px; height: 47px; left: 0px; top: 0px; position: absolute; color: black; font-size: 24px; font-family: Inter; font-weight: 500; word-wrap: break-word">Nome da empresa</div>
        <div style="width: 12.72px; height: 13px; padding-top: 1.35px; padding-bottom: 0.10px; padding-left: 1.89px; padding-right: 1.90px; left: 215px; top: 11px; position: absolute; 
        flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
            <div style="width: 8.94px; height: 11.55px; position: relative">
                <div style="width: 0.44px; height: 0.36px; left: 4.51px; top: 11.18px; position: absolute"></div>
                <div style="width: 8.94px; height: 10.29px; left: 0px; top: 0px; position: absolute; background: #FF0000"></div>
            </div>
        </div>
    </div>
    <div style="width: 562px; height: 47px; left: 349px; top: 459px; position: absolute">
        <div style="width: 562px; height: 47px; left: 0px; top: 0px; position: absolute; color: black; font-size: 24px; font-family: Inter; font-weight: 500; word-wrap: break-word">CNPJ</div>
        <div style="width: 13px; height: 13px; padding-top: 1.35px; padding-bottom: 0.10px; padding-left: 1.93px; padding-right: 1.94px; left: 66px; top: 9px; position: absolute; 
        justify-content: center; align-items: center; display: inline-flex">
            <div style="width: 9.13px; height: 11.55px; position: relative">
                <div style="width: 0.45px; height: 0.36px; left: 4.61px; top: 11.18px; position: absolute"></div>
                <div style="width: 9.13px; height: 10.29px; left: 0px; top: 0px; position: absolute; background: #FF0000"></div>
            </div>
        </div>
    </div>
    
    <div style="width: 142px; height: 50px; left: 788px; top: 665px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
        <div style="width: 142px; height: 50px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div style="width: 142px; height: 50px; background: #68B42D; border-radius: 10px"></div>
            <div style="width: 116.34px; height: 23.39px; text-align: center; color: white; font-size: 20px; font-family: Inter; font-weight: 700; word-wrap: break-word">Cadastrar</div>
        </div>
    </div>
    <div style="width: 142px; height: 50px; left: 990px; top: 665px; position: absolute; justify-content: center; align-items: center; display: inline-flex">
        <div style="width: 142px; height: 50px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div style="width: 142px; height: 50px; background: #464646; border-radius: 10px"></div>
            <div style="width: 116.34px; height: 23.39px; text-align: center; color: white; font-size: 20px; font-family: Inter; font-weight: 700; word-wrap: break-word">Cancelar</div>
        </div>
    </div>




@endsection