# JMS- Agenda

Agenda de contatos com notas e repositório.

- Finalidade

    Criar uma agenda de contatos, notas e com recurso de repositório de senhas online.

- Objetivo

    Cadastrar contatos, notas e repositório (dados de contatos).

- Principais entregas

    cadastrar e exibir contatos, notas e repositório de senhas.
    Programação de eventos importantes	O cronograma do projeto, a partir da data de assinatura, será de um custo macro de 15.900,00 em três etapas de acordo com as entregas.

# Gestor do projeto	
    Engenheiro de software: José Mendes, será o ponto de contato com o cliente.
- Autorizado por:
	José Mendes, Ciência da Computação.

# Cronograma: 
------------------documentação-----passos-------------
Passo 0 - gestão do escopo e do custo
          0.0 - quantificar o projeto
Passo 0 - iníciar e dar nome ao projeto
Passo 0 - iníciar o github 
          https://github.com/JoseMendesSilva/JMS-Agenda.git
Passo 0 - fazer o termo de abertura
Passo 0 - fazer o primeiro commit documentação

--------- estrutura do projeto ---------
Passo 0 - criar estrutura de pasta
Passo 0 - fazer o commit criar estrutura de pasta
Passo 0 - definir a sequência lógica de execução do projeto
Passo 0 - fazer o commit a sequência lógica de execução do projeto
Passo 0 - definir requisitos funcionais
Passo 0 - fazer o commit requizitos funcionais
Passo 0 - definir requizitos não funcionais
Passo 0 - fazer o commit requizitos não funcionais
Passo 0 - códificar o projeto
Passo 0 - fazer o commit códificar o projeto (+ prefixo de identificação)
Passo 0 - criar as views do projeto
Passo 0 - fazer o commitcriar as views do projeto (+ prefixo de identificação)
Passo 0 - vincular as views ao código do projeto
Passo 0 - fazer o commit vincular as views ao código do projeto (+ prefixo de identificação)
Passo 0 - testar o código
Passo 0 - fazer o commit testar o código
Passo 0 - colocar o projeto em produção

Passo 0 - fazer o termo de encerramento do projeto
Passo 0 - fazer o commit do termo de encerramento do projeto.


public class RollerCoaster {
	public static void main(String[] args) throws IOException {
		Scanner sc = new Scanner(System.in);
		int maxGuests = sc.nextInt();
		int heightMin = sc.nextInt();
		int heightMax = sc.nextInt();
    
		int enteredGuests = 0;
    
		List<Integer> guests = new ArrayList<Integer>();
    
		while(sc.hasNext()) {
			guests.add(sc.nextInt());
		}
		
		List<Integer> guestsAllowed = guests.stream()
										.filter(g -> g >= heightMin)
										.filter(g -> g <= heightMax)
										.collect(Collectors.toList());

		enteredGuests = (guestsAllowed.size() < maxGuests) ? guestsAllowed.size() : maxGuests;
    
		System.out.println(enteredGuests);
	
		sc.close();
	}
}

var s = gets().split(" ");

//TODO: Complete os espaços em branco com uma possível solução para o desafio

let n = parseInt(           [0]);
let min = parseInt(      [1]);
let          = parseInt(     [2]);

		let altura, conta = 0;
		for (let x=0 ; x<n ; x++) {
		               
		if(altura >=          &&         altura <= )
			conta++;
		}
		print(          );