<div id="categories">
    <button id="add-category">Add Category</button>
</div>

<div id="cards">
    <button id="add-card">Add Card</button>
</div>

<div id="controls">
    <button id="submit">Submit</button>
    <button id="reset">Reset</button>
</div>

<script type="text/javascript">

class cardSorting {
    constructor() {
        this.cardsContainer = document.getElementById('cards');
        this.categoriesContainer = document.getElementById('categories');
        this.cards;
        this.categories;
        this.addCardBtn = document.getElementById('add-card');
        this.addCategoryBtn = document.getElementById('add-category');
        this.submitBtn = document.getElementById('submit');
        this.resetBtn = document.getElementById('reset');
        this.addDefaultCategories();
        this.addDefaultCards();

        this.addCardBtn.addEventListener('click', function(e) {
            this.addCard('devonnnn');
        }.bind(this));
    }

    addDefaultCards() {
        var defaultCards = [
            'Card 1',
            'Card 2',
            'Card 3',
            'Card 4'
        ];

        for(var i = 0; i < defaultCards.length; i++) {
            this.addCard(defaultCards[i]);
        }
    }

    addCard(data = 'dveon') {
        var card = document.createElement('div');
        var text = document.createElement('p');

        card.classList.add('card');
        text.innerText = data;
        card.append(text);

        this.cardsContainer.append(card);
    }

    removeCard() {

    }

    addDefaultCategories() {
        var defaultCategories = [
          'Category 1',
          'Category 2',
          'Category 3',
          'Category 4'
        ];

        for(var i = 0; i < defaultCategories.length; i++) {
            this.addCategory(defaultCategories[i]);
        }
    }

    addCategory(data) {
        var category = document.createElement('div');
        var text = document.createElement('p');

        category.classList.add('category');
        text.innerText = data;
        category.append(text);

        this.categoriesContainer.append(category);
    }

    removeCategory() {

    }

    reset() {

    }

    submit() {

    }
}

var $cardSorting = new cardSorting();

</script>