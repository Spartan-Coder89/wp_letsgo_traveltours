window.onpageshow = function() {

  /**
   * Insert new tab and new itenerary list
   */
  document.getElementById('new_tab').addEventListener('click', function() {
    
    let tabs_container_child_count = document.getElementById('tabs_container').childElementCount;
    let day_count = tabs_container_child_count > 0 ? tabs_container_child_count + 1 : 1;

    //  Create new tab
    let tab_div = document.createElement('div');
    tab_div.classList.add('day');
    tab_div.dataset.day = day_count;
    tab_div.innerHTML = 'Day '+ day_count;
    document.getElementById('tabs_container').append(tab_div);

    //  Create new itenerary list
    let itenerary_div = document.createElement('div');
    itenerary_div.classList.add('fields_wrap');
    itenerary_div.id = 'itenerary_' + day_count;
    itenerary_div.innerHTML = 
    '<div id="itenerary_list_'+ day_count +'" class="inputs"></div>' +
    '<div class="add_item_box">' +
      '<textarea id="itenerary_item_content_'+ day_count +'" name=""></textarea>' +
      '<button class="itenerary_add_item add_item" type="button" data-day="'+ day_count +'">Add New Item</button>' +
    '</div>';
    document.getElementById('itenerary_list_container').append(itenerary_div);

    //  Display new itenerary list
    if (document.querySelectorAll('#itenerary_list_container .fields_wrap')) {

      document.querySelectorAll('#itenerary_list_container .fields_wrap').forEach( function(element) {
        if (element.classList.contains('show')) {
          element.classList.remove('show');
        }
      });
  
      document.getElementById('itenerary_' + day_count).classList.add('show');
    }
  });


  /**
   * Remove last tab and last itenerary list
   */
  document.getElementById('minus_tab').addEventListener('click', function() {
    let tabs_container = document.getElementById('tabs_container');
    let day = tabs_container.querySelector('.day:last-of-type').dataset.day;
    tabs_container.querySelector('.day:last-of-type').remove();

    document.getElementById('itenerary_' + day).remove();
  });
  

  /**
   * Toggle itenerary list
   */
  document.querySelector('#itenerary .tabs .tabs_container').addEventListener('click', function(e) {

    let target_element = e.target;

    if (target_element.matches('div.day')) {

      document.querySelectorAll('#itenerary_list_container .fields_wrap').forEach( function(element) {
        if (element.classList.contains('show')) {
          element.classList.remove('show');
        }
      });

      document.getElementById('itenerary_' + target_element.dataset.day).classList.add('show');
    }
  });


  /**
   * Add items to itenerary list
   */
  document.getElementById('itenerary_list_container').addEventListener('click', function(e) {

    let target_element = e.target;
    if (target_element.matches('button.itenerary_add_item')) {

      let item_content = document.getElementById('itenerary_item_content_' + target_element.dataset.day).value;

      if (item_content !== '') {
        let itenerary_item = document.createElement('div');
        itenerary_item.classList.add('input_fields');
        itenerary_item.innerHTML = 
        '<p>'+ item_content +'</p>' +
        '<input type="hidden" name="itenerary['+ target_element.dataset.day +'][]" value="'+ item_content +'">' +
        '<button class="remove_list_item" type="button">Remove</button>';
        
        document.getElementById('itenerary_list_' + target_element.dataset.day).append(itenerary_item);
        document.getElementById('itenerary_item_content_' + target_element.dataset.day).value = '';
      }
    }
  });


  /**
   * Add item to key highlights list and general details list
   */
  function add_items_to_list(button_id, list_container_id, item_content_id) {

    let name = '';

    if (list_container_id == 'key_highlights_list_container') {
      name = 'key_highlights[]';
    }

    if (list_container_id == 'best_features_list_container') {
      name = 'best_features[]';
    }

    document.getElementById(button_id).addEventListener('click', function() {

      let item_content = document.getElementById(item_content_id).value;

      if (item_content) {
        let list_item = document.createElement('div');
        list_item.classList.add('input_fields');
        list_item.innerHTML = 
        '<p>'+ item_content +'</p>' +
        '<input type="hidden" name="'+ name +'" value="'+ item_content +'">' +
        '<button class="remove_list_item" type="button">Remove</button>';

        document.getElementById(list_container_id).append(list_item);
        document.getElementById(item_content_id).value = '';
      }
    });
  }
  add_items_to_list('key_highlights_add_item', 'key_highlights_list_container', 'key_highlights_item_content');
  add_items_to_list('best_features_add_item', 'best_features_list_container', 'best_features_item_content');


  /**
   * Remove list item
   */
  document.getElementById('meta_details_wrap').addEventListener('click', function(e) {
    let target_element = e.target;
    if (target_element.matches('button.remove_list_item')) {
      target_element.parentElement.remove();
    }
  });

}