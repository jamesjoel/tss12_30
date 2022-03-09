import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ControlStatement1Component } from './control-statement1.component';

describe('ControlStatement1Component', () => {
  let component: ControlStatement1Component;
  let fixture: ComponentFixture<ControlStatement1Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ControlStatement1Component ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ControlStatement1Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
