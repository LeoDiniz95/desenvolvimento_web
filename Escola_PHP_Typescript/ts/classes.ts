class Pessoa{

    nome: string;
    protected rg: number;

    /**********************
    *    CONSTRUTORES     *
    **********************/

    pessoa( nome, rg){
        this.nome       = nome;
        this.rg         = rg;
    }

    /********************
    *     GETTERS       *
    ********************/

    getNome():string{
        return this.nome;
    }

    getRg():number{
        return this.rg;
    }

    /********************
    *     SETTERS       *
    ********************/

    setNome(nome){
        this.nome = nome;
    }

    setRG(rg){
        this.rg = rg;
    }

}




/*****************************************************************************************************
******************************************************************************************************
******                                    ALUNOS                                           ******
******************************************************************************************************
*****************************************************************************************************/

class Alunos extends Pessoa{

    private RA: string;
    private turno: string;
    private status: string;// cursando, formado, matrícula trancada ou se desistiu

    /**********************
    *    CONSTRUTORES     *
    **********************/

    Aluno( nome, rg, RA, turno, status){
        this.nome       = nome;
        this.rg         = rg;
        this.RA         = RA;
        this.turno      = turno;
        this.status     = status;
    }


    /********************
    *     GETTERS       *
    ********************/

    getRA():string{
        return this.RA;
    }

    getTurno():string{
        return this.turno;
    }

    getStatus():string{
        return this.status;
    }

    /********************
    *     SETTERS       *
    ********************/

    setRA(RA){
        this.RA = RA;
    }

    setTurno(turno){
        this.turno = turno;
    }

    setStatus(status){
        this.status = status;
    }

}






/*****************************************************************************************************
******************************************************************************************************
******                                    FUNCIONÁRIOS                                          ******
******************************************************************************************************
*****************************************************************************************************/
class Funcionarios extends Pessoa{

    protected salarioHora: number;    // salario ganho por hora
    protected qntHoraMes: number;        //  quantidade de horas trabalhadas por mês

    /**********************
    *    CONSTRUTORES     *
    **********************/

    funcionarios(rg,nome,salarioHora,qntHoraMes){
        this.rg             = rg;
        this.nome           = nome;
        this.salarioHora    = salarioHora;
        this.qntHoraMes     = qntHoraMes;
    }

    /********************
    *     GETTERS       *
    ********************/

    getSalarioHora():number{
        return this.salarioHora;
    }

    getQtnHoraMes():number{
        return this.qntHoraMes;
    }

    /********************
    *     SETTERS       *
    ********************/

    setsalarioHora(salarioHora:number){
        this.salarioHora = salarioHora;
    }

    setQtnHoraMes(qtnHoraMes:number){
        this.qntHoraMes = qtnHoraMes;
    }
}






/*****************************************************************************************************
******************************************************************************************************
******                                    PROFESSORES                                           ******
******************************************************************************************************
*****************************************************************************************************/
class Professores extends Funcionarios{

    private areaAtuacao: string;    // Área de atuação do professor

    /**********************
    *    CONSTRUTORES     *
    **********************/

    professores(rg,nome,salarioHora,qntHoraMes,areaAtuacao){
        this.rg                 = rg;
        this.nome               = nome;
        this.salarioHora        = salarioHora;
        this.qntHoraMes         = qntHoraMes;
        this.areaAtuacao        = areaAtuacao;
    }

    /********************
    *     GETTERS       *
    ********************/

    getAreaAtuacao():string{
        return this.areaAtuacao;
    }

    /********************
    *     SETTERS       *
    ********************/
   setAreaAtuacao(areaAtuacao:string){
       this.areaAtuacao = areaAtuacao;
   }
}

function trocarHora():void{
    var hora = new Date().toLocaleString();
    document.getElementById("lblHour").innerHTML = hora;
}
