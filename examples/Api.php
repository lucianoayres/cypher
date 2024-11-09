<?php
// Set response headers
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Sample data (in a real-world scenario, this would come from a database)
$data = [
    1 => ["id" => 1, "name" => "Item 1", "description" => "This is item 1"],
    2 => ["id" => 2, "name" => "Item 2", "description" => "This is item 2"]
];

// Get the HTTP method
$method = $_SERVER['REQUEST_METHOD'];

// Get the input (only used for POST and PUT)
$input = json_decode(file_get_contents('php://input'), true);

// Handle the request based on the HTTP method
switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];
            if (isset($data[$id])) {
                echo json_encode($data[$id]);
            } else {
                http_response_code(404);
                echo json_encode(["message" => "Item not found"]);
            }
        } else {
            echo json_encode(array_values($data));
        }
        break;

    case 'POST':
        if ($input && isset($input['name']) && isset($input['description'])) {
            $newId = max(array_keys($data)) + 1;
            $data[$newId] = ["id" => $newId, "name" => $input['name'], "description" => $input['description']];
            http_response_code(201);
            echo json_encode(["message" => "Item created", "item" => $data[$newId]]);
        } else {
            http_response_code(400);
            echo json_encode(["message" => "Invalid input"]);
        }
        break;

    case 'PUT':
        if (isset($_GET['id']) && $input && isset($input['name']) && isset($input['description'])) {
            $id = (int) $_GET['id'];
            if (isset($data[$id])) {
                $data[$id] = ["id" => $id, "name" => $input['name'], "description" => $input['description']];
                echo json_encode(["message" => "Item updated", "item" => $data[$id]]);
            } else {
                http_response_code(404);
                echo json_encode(["message" => "Item not found"]);
            }
        } else {
            http_response_code(400);
            echo json_encode(["message" => "Invalid input"]);
        }
        break;

    case 'DELETE':
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];
            if (isset($data[$id])) {
                unset($data[$id]);
                echo json_encode(["message" => "Item deleted"]);
            } else {
                http_response_code(404);
                echo json_encode(["message" => "Item not found"]);
            }
        } else {
            http_response_code(400);
            echo json_encode(["message" => "ID is required"]);
        }
        break;

    default:
        http_response_code(405);
        echo json_encode(["message" => "Method not allowed"]);
        break;
}
?>