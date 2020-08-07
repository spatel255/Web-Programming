CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(128) NOT NULL,
  `product_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`product_id`, `product_name`, `product_description`) VALUES
(1, 'Greek Goddess Bowl', 'Preheat oven to 375 degrees F (190 C) and set out a baking sheet.
Add washed, dried chickpeas to a mixing bowl along with oil, Shawarma Spice Blend, maple syrup, and salt. Toss to combine.
Add seasoned chickpeas to the baking sheet. Bake for 20-23 minutes or until the chickpeas are slightly crispy and golden brown. Remove from oven and set aside.
Assemble bowl by dividing tzatziki, tabbouleh (or parsley), olives, tomatoes, cucumber, and carrots (optional) between two serving bowls. Top with cooked chickpeas and garnish with fresh lemon juice.
This bowl is delicious as is, but it would also pair well with my 4-ingredient Garlic Dill Sauce or my Tahini Dressing!
Best when fresh, but you can store leftovers (separately) up to 3-4 days in the refrigerator. Store leftover chickpeas separately in a sealed container at room temperature up to 3 days or in the freezer up to 1 month.'),
(2, 'Guardian Without Duty', 'Does a table migrate inside an excessive paranoid?'),
(3, 'Enemies Without Hope', 'A cured parameter fears behind the phenomenon.'),
(4, 'Lords Of The Void', 'The diary scores around the generalized lie.'),
(5, 'Doctors And Aliens', 'The diary scores around the generalized lie.'),
(6, 'Blacksmiths And Criminals', 'A considerable snail works into a purchase.');

ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_name` (`product_name`);

ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
