var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var Pessoa = /** @class */ (function () {
    function Pessoa() {
    }
    /**********************
    *    CONSTRUTORES     *
    **********************/
    Pessoa.prototype.pessoa = function (nome, rg) {
        this.nome = nome;
        this.rg = rg;
    };
    /********************
    *     GETTERS       *
    ********************/
    Pessoa.prototype.getNome = function () {
        return this.nome;
    };
    Pessoa.prototype.getRg = function () {
        return this.rg;
    };
    /********************
    *     SETTERS       *
    ********************/
    Pessoa.prototype.setNome = function (nome) {
        this.nome = nome;
    };
    Pessoa.prototype.setRG = function (rg) {
        this.rg = rg;
    };
    return Pessoa;
}());
/*****************************************************************************************************
******************************************************************************************************
******                                    ALUNOS                                           ******
******************************************************************************************************
*****************************************************************************************************/
var Alunos = /** @class */ (function (_super) {
    __extends(Alunos, _super);
    function Alunos() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    /**********************
    *    CONSTRUTORES     *
    **********************/
    Alunos.prototype.Aluno = function (nome, rg, RA, turno, status) {
        this.nome = nome;
        this.rg = rg;
        this.RA = RA;
        this.turno = turno;
        this.status = status;
    };
    /********************
    *     GETTERS       *
    ********************/
    Alunos.prototype.getRA = function () {
        return this.RA;
    };
    Alunos.prototype.getTurno = function () {
        return this.turno;
    };
    Alunos.prototype.getStatus = function () {
        return this.status;
    };
    /********************
    *     SETTERS       *
    ********************/
    Alunos.prototype.setRA = function (RA) {
        this.RA = RA;
    };
    Alunos.prototype.setTurno = function (turno) {
        this.turno = turno;
    };
    Alunos.prototype.setStatus = function (status) {
        this.status = status;
    };
    return Alunos;
}(Pessoa));
/*****************************************************************************************************
******************************************************************************************************
******                                    FUNCIONÁRIOS                                          ******
******************************************************************************************************
*****************************************************************************************************/
var Funcionarios = /** @class */ (function (_super) {
    __extends(Funcionarios, _super);
    function Funcionarios() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    /**********************
    *    CONSTRUTORES     *
    **********************/
    Funcionarios.prototype.funcionarios = function (rg, nome, salarioHora, qntHoraMes) {
        this.rg = rg;
        this.nome = nome;
        this.salarioHora = salarioHora;
        this.qntHoraMes = qntHoraMes;
    };
    /********************
    *     GETTERS       *
    ********************/
    Funcionarios.prototype.getSalarioHora = function () {
        return this.salarioHora;
    };
    Funcionarios.prototype.getQtnHoraMes = function () {
        return this.qntHoraMes;
    };
    /********************
    *     SETTERS       *
    ********************/
    Funcionarios.prototype.setsalarioHora = function (salarioHora) {
        this.salarioHora = salarioHora;
    };
    Funcionarios.prototype.setQtnHoraMes = function (qtnHoraMes) {
        this.qntHoraMes = qtnHoraMes;
    };
    return Funcionarios;
}(Pessoa));
/*****************************************************************************************************
******************************************************************************************************
******                                    PROFESSORES                                           ******
******************************************************************************************************
*****************************************************************************************************/
var Professores = /** @class */ (function (_super) {
    __extends(Professores, _super);
    function Professores() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    /**********************
    *    CONSTRUTORES     *
    **********************/
    Professores.prototype.professores = function (rg, nome, salarioHora, qntHoraMes, areaAtuacao) {
        this.rg = rg;
        this.nome = nome;
        this.salarioHora = salarioHora;
        this.qntHoraMes = qntHoraMes;
        this.areaAtuacao = areaAtuacao;
    };
    /********************
    *     GETTERS       *
    ********************/
    Professores.prototype.getAreaAtuacao = function () {
        return this.areaAtuacao;
    };
    /********************
    *     SETTERS       *
    ********************/
    Professores.prototype.setAreaAtuacao = function (areaAtuacao) {
        this.areaAtuacao = areaAtuacao;
    };
    return Professores;
}(Funcionarios));
function trocarHora() {
    var hora = new Date().toLocaleString();
    document.getElementById("lblHour").innerHTML = hora;
}
