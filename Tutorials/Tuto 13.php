<?hh

// You can create your own generics!
class Store<T> {
  public function __construct(private T $data) {}
  public function get(): T { return $this->data; }
  public function set(T $x): void { $this->data = $x; }
}

// TODO: fix the return type of the function test you need to replace it with Store<string>
function test(): Store<int> {
  $data = 'Hello world!';
  $x = new Store($data);
  return $x;
}
