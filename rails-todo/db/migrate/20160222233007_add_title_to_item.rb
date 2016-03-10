class AddTitleToItem < ActiveRecord::Migration
  def change
	  add_column :items, :item_text, :string
  end
end
