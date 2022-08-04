<?php

namespace modells\mensagens;

class MensagensModells
{

    // O tipo a ser passado para a função mensagem é o número 'RFXXX' do requizito funcional definido na documentação.
    // exemplo: RF010:
    // retorno: 'O cadastro foi realizado.'
    final function mensagems($tipo)
    {
        switch ($tipo) {
            case 'RF010': {
                    return 'O cadastro foi realizado.';
                    break;
                }
            case 'RF011': {
                    return 'O cadastro não foi realizado.';
                    break;
                }
            case 'RF012': {
                    return 'Erro ao realizar o cadastro.';
                    break;
                }
            case 'RF013': {
                    return 'Registro não encontrado.';
                    break;
                }
            case 'RF014': {
                    return 'Usuário não encontrado.';
                    break;
                }
            case 'RF015': {
                    return 'Todos os campos são obrigatório.';
                    break;
                }
            case 'RF016': {
                    return 'Preencha todos os campos.';
                    break;
                }
            case 'RF017': {
                    return 'Faça login para acessar o sistema.';
                    break;
                }
            case 'RF018': {
                    return 'Os dados informados ferem a política de uso da agenda, corrija os dados.';
                    break;
                }
            case 'RF019': {
                    return 'Todos os campos são obrigatório.';
                    break;
                }
            case 'RF020': {
                    return 'A senha deve ter entre 8 e 15 caracteres.';
                    break;
                }
            case 'RF021': {
                    return 'As senhas não confere.';
                    break;
                }
            case 'RF022': {
                    return 'Sessão iniciada para: ';
                    break;
                }
            case 'RF023': {
                    return 'Usuário: ‘nome do usuário ‘, a sua sessão foi encerrada.';
                    break;
                }
            case 'RF024': {
                    return 'Página não encontrada.';
                    break;
                }
            case 'RF025': {
                    return 'os erros e enviar para o e-mail do desenvolvedor para a correçã.';
                    break;
                }
            case 'RF026': {
                    return 'Contate o administrador do sistema.';
                    break;
                }
            default: {
                    return 'Sessão iniciada para: ';
                    break;
                }
        }
    }
}
