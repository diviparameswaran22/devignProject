SELECT

    admin_pages_grand_master.admin_page_name
FROM
    admin_pages_grand_master
WHERE
    admin_pages_grand_master.admin_page_id NOT IN (
        SELECT
            admin_pages_data.admin_page_id
        from
            admin_pages_data
    );

    CREATE TABLE admin_pages_master (
    id int(5) NOT NULL,
    admin_page_id int(5) NOT NULL,
    admin_page_component_id int(5) NOT NULL,
    admin_component_name Varchar(255)
);
CREATE TABLE admin_pages_master (
  id INT(5) NOT NULL AUTO_INCREMENT,
  admin_page_id int(5) NOT NULL,
  admin_page_component_id int(5) NOT NULL,
  admin_component_name Varchar(255),
  PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE admin_pages_grand_master (
  admin_page_id int(5)  NOT NULL AUTO_INCREMENT,
  admin_view_path_page Varchar(255),
  PRIMARY KEY (admin_page_id)
) ENGINE=InnoDB;


CREATE TABLE admin_pages_data (
  id INT(5) NOT NULL AUTO_INCREMENT,
  admin_page_id int(5) NOT NULL,
  admin_page_component_data_no int(5) NOT NULL,
  admin_component_data Varchar(255),
  PRIMARY KEY (id)
) ENGINE=InnoDB;


