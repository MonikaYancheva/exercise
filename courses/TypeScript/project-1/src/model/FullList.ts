import ListItem from './ListItem';

const item = new ListItem();

interface List {
  list: ListItem[];
  load(): void;
  save(): void;
  clearList(): void;
  addItem(itemObj: ListItem): void;
  removeItem(id: string): void;
}

export default class FullList implements List {
  static instance: FullList = newFullList();

  private constructor(private list: ListItem[] = []) {}
}
