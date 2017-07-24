# This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).

module ApiTitle
  class APIController < BaseController
    @@instance = APIController.new
    # Singleton instance of the controller class
    def self.instance
      @@instance
    end

    # TODO: type endpoint description here
    # @param [String] testing Required parameter: Example: 
    # @param [String] cache_control Required parameter: Example: 
    # @param [String] content_type Required parameter: Example: 
    # @param [String] postman_token Required parameter: Example: 
    # @return Mixed response from the API call
    def new(testing,
            cache_control,
            content_type,
            postman_token)

      # prepare query url
      _query_builder = Configuration.base_uri.dup
      _query_builder << '/notes'
      _query_url = APIHelper.clean_url _query_builder

      # prepare headers
      _headers = {
        'accept' => 'application/json',
        'cache-control' => cache_control,
        'content-type' => content_type,
        'postman-token' => postman_token
      }

      # prepare form parameters
      _parameters = {
        '{ "testing"' => testing
      }

      # prepare and execute HttpRequest
      _request = @http_client.post _query_url, headers: _headers, parameters: _parameters
      OAuth2.apply(_request)
      _context = execute_request(_request)
      validate_response(_context)

      # return appropriate response type
      decoded = APIHelper.json_deserialize(_context.response.raw_body) if not (_context.response.raw_body.nil? or _context.response.raw_body.to_s.strip.empty?)
      return decoded
    end

    # TODO: type endpoint description here
    # @param [Sample2Request] body Required parameter: Example: 
    # @param [String] cache_control Required parameter: Example: 
    # @param [String] content_type Required parameter: Example: 
    # @param [String] postman_token Required parameter: Example: 
    # @return Mixed response from the API call
    def create_sample_2(body,
                        cache_control,
                        content_type,
                        postman_token)

      # prepare query url
      _query_builder = Configuration.base_uri.dup
      _query_builder << '/\'/1.1/test.php'
      _query_url = APIHelper.clean_url _query_builder

      # prepare headers
      _headers = {
        'accept' => 'application/json',
        'content-type' => 'application/json; charset=utf-8',
        'cache-control' => cache_control,
        'content-type' => content_type,
        'postman-token' => postman_token
      }

      # prepare and execute HttpRequest
      _request = @http_client.post _query_url, headers: _headers, parameters: body.to_json
      OAuth2.apply(_request)
      _context = execute_request(_request)
      validate_response(_context)

      # return appropriate response type
      decoded = APIHelper.json_deserialize(_context.response.raw_body) if not (_context.response.raw_body.nil? or _context.response.raw_body.to_s.strip.empty?)
      return decoded
    end
  end
end
