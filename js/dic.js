/* 
 * 
 * GNU GENERAL PUBLIC LICENSE -  Version 3, 29 June 2007
 * < https://www.gnu.org/licenses/gpl-3.0.en.html >  
 * Autor: Vovolinux <suporte@viniciusalopes.com.br> 
 * Data : 2019-08-10
 * 
 */


function idioma(novo_idioma) {

    // Idioma atual da página
    var idioma_atual = document.getElementsByTagName('html')[0].getAttribute('lang')

    if (idioma_atual === novo_idioma) {
        // Nada a fazer
        return
    }

    // Diretório do site
    var root = '/'

    // Identifica a página atual
    var pagina = window.location.pathname
    if (pagina === root) {
        pagina = root + 'index.php'
    }

    // html da página
    var html = document.getElementsByTagName('html')[0]

    // Arquivo com o dicionario
    var dic = 'dic/dic.json'

    // Lê o arquivo json do dicionário da página
    var request = new XMLHttpRequest()  // Cria objeto request
    request.open('GET', dic)            // Seta o request
    request.responseType = 'json'       // Seta o retorno como json
    request.send()                      // Requisita a leitura do arquivo

    request.onload = function () {      // Enquanto lê o arquivo
        // Obtém o dic.json
        var objDic = request.response
        if (objDic[pagina]) {           // verifica se existe o dicionário para a pagina
            // Executa a tradução 
            traduzir(html, objDic[pagina], idioma_atual, novo_idioma)
        } else {
            alert('There is no dictionary for this page yet.\nWhat about collaborating?\nGo to:\nhttps: //slackcon.org/colabore.php \nto find out how ...')
            alert('Ainda não existe um dicionário para esta página.\nQue tal colaborar?\nAcesse:\nhttps://slackcon.org/colabore.php \npara saber como...')
            return
        }
    }
}

function traduzir(html, textos, idioma_atual, novo_idioma) {

    // Altera o idioma da página
    html.setAttribute('lang', novo_idioma)

    // Obtém as tags <meta ...>
    var metas = html.getElementsByTagName('meta')

    // Flags para não procurar mais depois de alteradas
    var description = false
    var http_equiv = false

    for (m = 0; m < metas.length; m++) {
        var tag = metas[m]
        // Traduz o content da tag <meta name="description"...>
        if (tag.getAttribute('name') && !description) {
            if (tag.getAttribute('name') === 'description') {
                // Busca a description atual no dicionário
                for (t in textos) {
                    if (textos[t][idioma_atual] === tag.getAttribute('content')) {
                        // Encontrou o texto, traduz...
                        tag.setAttribute('content', textos[t][novo_idioma])
                        description = true
                        break
                    }
                }
            }
        }

        // Altera idioma da tag <meta http-equiv="content-language" content="lang">
        if (tag.getAttribute('http-equiv') && !http_equiv) {
            tag.setAttribute('content', novo_idioma)
            http_equiv = true
        }

        // Interrompe o laço se os dois já estiverem atualizados
        if (description && http_equiv) {
            break
        }
    }

    // Tags que serão traduzidas
    var tags = ['h1', 'h2', 'h3', 'h4', 'h5', 'a', 'b', 'u', 'li', 'p', 'div']

    for (texto in textos) {                                     // Percorre textos do dic
        for (tag in tags) {                                     // Percorre array de tags
            var colecao = html.getElementsByTagName(tags[tag])  // Armazena tags em colecao
            for (item in colecao) {                             // Percorre colecao
                var txtDic = textos[texto][idioma_atual]        // Texto no dicionário
                var htmlItem = colecao[item].innerHTML          // Html do item da coleção

                if (typeof htmlItem !== 'undefined') {   // Se o texto da tag for válido
                    var pos = htmlItem.indexOf(txtDic)   // Posição do texto do dicionário no texto da tag
                    if (pos >= 0) {                      // Se existir o texto na tag
                        colecao[item].innerHTML = htmlItem.replace(txtDic, textos[texto][novo_idioma]) // Traduz...
                    }
                }
            }
        }
    }
}

