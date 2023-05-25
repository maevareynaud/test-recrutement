const articleList = []; // In a real app this list would be full of articles.
const maxKudos = 5;

function calculateTotalKudos(articles) {
  let articleKudos = 0;
  
  for (let article of articles) {
    articleKudos += article.kudos;
  }
  
  return articleKudos;
}

document.write(`
  <p>Maximum kudos you can give to an article: ${maxKudos}</p>
  <p>Total Kudos already given across all articles: ${calculateTotalKudos(articleList)}</p>
`);

