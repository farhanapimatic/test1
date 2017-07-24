# This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).

module ApiTitle
  class NotesController < BaseController
    @@instance = NotesController.new
    # Singleton instance of the controller class
    def self.instance
      @@instance
    end

    # Get a list of notes.
    # @return List of NoteData response from the API call
    def get_notes

      # prepare query url
      _query_builder = Configuration.base_uri.dup
      _query_builder << '/notes'
      _query_url = APIHelper.clean_url _query_builder

      # prepare headers
      _headers = {
        'accept' => 'application/json'
      }

      # prepare and execute HttpRequest
      _request = @http_client.get _query_url, headers: _headers
      OAuth2.apply(_request)
      _context = execute_request(_request)
      validate_response(_context)

      # return appropriate response type
      decoded = APIHelper.json_deserialize(_context.response.raw_body)
      return decoded.map{|element| NoteData.from_hash(element)}
    end

    # Create a new note using a title and an optional content body.
    # @param [CreateNewNoteRequest] body Required parameter: Example: 
    # @return void response from the API call
    def create_new_note(body)

      # prepare query url
      _query_builder = Configuration.base_uri.dup
      _query_builder << '/notes'
      _query_url = APIHelper.clean_url _query_builder

      # prepare headers
      _headers = {
        'content-type' => 'application/json; charset=utf-8'
      }

      # prepare and execute HttpRequest
      _request = @http_client.post _query_url, headers: _headers, parameters: body.to_json
      OAuth2.apply(_request)
      _context = execute_request(_request)

      # validate response against endpoint and global error codes
      if _context.response.status_code == 400
        raise APIException.new 'Unexpected error in API call. See HTTP response body for details.', _context
      end
      validate_response(_context)
    end

    # Get a single note.
    # @param [String] id Required parameter: The note ID
    # @param [Boolean] body Required parameter: Set to `false` to exclude note body content.
    # @return NoteData response from the API call
    def get_note(id,
                 body)

      # prepare query url
      _query_builder = Configuration.base_uri.dup
      _query_builder << '/notes/{id}'
      _query_builder = APIHelper.append_url_with_template_parameters _query_builder, {
        'id' => id
      }
      _query_builder = APIHelper.append_url_with_query_parameters _query_builder, {
        'body' => body
      }, array_serialization: Configuration.array_serialization
      _query_url = APIHelper.clean_url _query_builder

      # prepare headers
      _headers = {
        'accept' => 'application/json'
      }

      # prepare and execute HttpRequest
      _request = @http_client.get _query_url, headers: _headers
      OAuth2.apply(_request)
      _context = execute_request(_request)

      # validate response against endpoint and global error codes
      if _context.response.status_code == 404
        raise APIException.new 'Unexpected error in API call. See HTTP response body for details.', _context
      end
      validate_response(_context)

      # return appropriate response type
      decoded = APIHelper.json_deserialize(_context.response.raw_body)
      return NoteData.from_hash(decoded)
    end

    # Update a single note by setting the title and/or body.
    # ::: warning
    # #### <i class="fa fa-warning"></i> Caution
    # If the value for `title` or `body` is `null` or `undefined`, then the corresponding value is not modified on the server. However, if you send an empty string instead then it will **permanently overwrite** the original value.
    # :::
    # @param [String] id Required parameter: The note ID
    # @param [String] body Optional parameter: Example: 
    # @return NoteData response from the API call
    def update_a_note(id,
                      body = nil)

      # prepare query url
      _query_builder = Configuration.base_uri.dup
      _query_builder << '/notes/{id}'
      _query_builder = APIHelper.append_url_with_template_parameters _query_builder, {
        'id' => id
      }
      _query_builder = APIHelper.append_url_with_query_parameters _query_builder, {
        'body' => body
      }, array_serialization: Configuration.array_serialization
      _query_url = APIHelper.clean_url _query_builder

      # prepare headers
      _headers = {
        'accept' => 'application/json'
      }

      # prepare and execute HttpRequest
      _request = @http_client.put _query_url, headers: _headers
      OAuth2.apply(_request)
      _context = execute_request(_request)

      # validate response against endpoint and global error codes
      if _context.response.status_code == 404
        raise APIException.new 'Unexpected error in API call. See HTTP response body for details.', _context
      end
      validate_response(_context)

      # return appropriate response type
      decoded = APIHelper.json_deserialize(_context.response.raw_body)
      return NoteData.from_hash(decoded)
    end

    # Delete a single note
    # @param [String] id Required parameter: The note ID
    # @param [String] body Optional parameter: Example: 
    # @return void response from the API call
    def delete_a_note(id,
                      body = nil)

      # prepare query url
      _query_builder = Configuration.base_uri.dup
      _query_builder << '/notes/{id}'
      _query_builder = APIHelper.append_url_with_template_parameters _query_builder, {
        'id' => id
      }
      _query_builder = APIHelper.append_url_with_query_parameters _query_builder, {
        'body' => body
      }, array_serialization: Configuration.array_serialization
      _query_url = APIHelper.clean_url _query_builder

      # prepare and execute HttpRequest
      _request = @http_client.delete _query_url
      OAuth2.apply(_request)
      _context = execute_request(_request)

      # validate response against endpoint and global error codes
      if _context.response.status_code == 404
        raise APIException.new 'Unexpected error in API call. See HTTP response body for details.', _context
      end
      validate_response(_context)
    end

    # Get a list of notes.
    # @return List of NoteData response from the API call
    def get_notes_1

      # prepare query url
      _query_builder = Configuration.base_uri.dup
      _query_builder << '/notes'
      _query_url = APIHelper.clean_url _query_builder

      # prepare headers
      _headers = {
        'accept' => 'application/json'
      }

      # prepare and execute HttpRequest
      _request = @http_client.get _query_url, headers: _headers
      OAuth2.apply(_request)
      _context = execute_request(_request)
      validate_response(_context)

      # return appropriate response type
      decoded = APIHelper.json_deserialize(_context.response.raw_body)
      return decoded.map{|element| NoteData.from_hash(element)}
    end
  end
end
