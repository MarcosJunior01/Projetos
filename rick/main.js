// URL da API para buscar personagens
const apiUrl = 'https://rickandmortyapi.com/api/character/';

// Função para exibir os personagens na página
function exibirPersonagens(personagens) {
  const listaPersonagens = document.getElementById('personagens-list');

  personagens.forEach(personagem => {
    const itemLista = document.createElement('li');
    itemLista.classList.add('character-item');

    const statusClass = personagem.status === 'Alive' ? 'alive' : 'dead';

    const characterInfo = document.createElement('div');
    characterInfo.classList.add('character-info');

    const characterDetails = document.createElement('div');
    characterDetails.classList.add('character-details');

    characterDetails.innerHTML = `
      <p class="character-name">${personagem.name}</p>
      <p><strong>Status:</strong> <span class="character-status ${statusClass}">${personagem.status}</span></p>
      <p><strong>Espécie:</strong> ${personagem.species}</p>
    `;

    const characterImage = document.createElement('img');
    characterImage.classList.add('character-image');
    characterImage.src = personagem.image;
    characterImage.alt = personagem.name;

    characterInfo.appendChild(characterDetails);
    characterInfo.appendChild(characterImage);

    itemLista.appendChild(characterInfo);

    listaPersonagens.appendChild(itemLista);
  });
}

// Fazer a requisição usando fetch
fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    exibirPersonagens(data.results);
  })
  .catch(error => {
    console.error('Ocorreu um erro:', error);
  });
