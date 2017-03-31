import { FoodLogPage } from './app.po';

describe('food-log App', function() {
  let page: FoodLogPage;

  beforeEach(() => {
    page = new FoodLogPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
